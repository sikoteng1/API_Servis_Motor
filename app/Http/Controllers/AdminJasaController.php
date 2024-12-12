<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminJasaController extends Controller
{
    public function index()
    {
        $jasa = Jasa::all();
        return view('admin.daftar-jasa', compact('jasa'));
    }

    public function viewPesan()
    {
        $checkout = Checkout::all();
        return view('admin.daftar-pemesanan', compact('checkout'));
    }

    public function cetakJasa()
    {
        $jasa = Jasa::all();
        return view('admin.cetak-jasa',compact('jasa'));
    }

    public function cetakPemesanan()
    {
        $checkout = Checkout::all();
        return view('admin.cetak-pemesanan',compact('checkout'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image',
        ]);

        $file = $request->file('foto');
        $path = time() . '_' . $request->input('nama') . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/storage/fotojasa/' . $path, file_get_contents($file));

        Jasa::create([
            'nama_jasa' => $request->input('nama_jasa'),
            'foto_jasa' => $path,
            'deskripsi_jasa' => $request->input('deskripsi'),

        ]);
        return redirect('/admin.daftar-jasa')->with('success', 'jasa berhasil dibuat.');
    }

    public function delete($id)
    {
        $jasa = Jasa::find($id);
        $jasa->delete();
        // dd($jasa);
        return redirect()->back();
    }

    public function update($id)
    {
        $jasa = Jasa::findOrFail($id);
        return view('admin.update-jasa', compact('jasa'));
    }



    public function showChart() {
        // Ambil data, group by tanggal, dan hitung jumlah pesanan per tanggal
        $orders = DB::table('pesanan')
                    ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total_orders'))
                    ->groupBy('date')
                    ->orderBy('date', 'asc')
                    ->get();

        return view('admin.home', ['orders' => $orders]);
    }
}
