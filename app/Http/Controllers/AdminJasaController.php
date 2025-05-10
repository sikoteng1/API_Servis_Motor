<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Jasa;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminJasaController extends Controller
{
    public function index()
    {
        $jasas = Jasa::all();
        return view('admin.daftar-jasa', compact('jasas'));
    }

    public function viewPesan()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.daftar-pemesanan', compact('pemesanan'));
    }

    public function cetakJasa()
    {
        $jasas = Jasa::all();
        return view('admin.cetak-jasa', compact('jasas'));
    }

    public function cetakPemesanan()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.cetak-pemesanan', compact('pemesanan'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'foto' => 'required|image',
        // ]);

        // $file = $request->file('foto');
        // $path = time() . '_' . $request->input('nama') . '.' . $file->getClientOriginalExtension();
        // Storage::disk('local')->put('public/storage/fotojasa/' . $path, file_get_contents($file));

        Jasa::create([
            'nama_jasa' => $request->input('nama_jasa'),
            // 'foto_jasa' => $path,
            'deskripsi_jasa' => $request->input('deskripsi'),

        ]);
        return redirect('/admin.daftar-jasa')->with('success', 'jasa berhasil dibuat.');
    }

    public function delete($id)
    {
        $jasas = Jasa::find($id);
        $jasas->delete();
        // dd($jasas);
        return redirect()->back();
    }

    // public function update($id)
    // {
    //     $jasas = Jasa::findOrFail($id);
    //     return view('admin.update-jasa', compact('jasa'));
    // }

    public function delete_pemesan($id)
    {
        $pemesanans = Pemesanan::find($id);
        $pemesanans->delete();
        return redirect()->back();
    }

    // public function update_pemesan($id)
    // {
    //     $jasas = Jasa::findOrFail($id);
    //     return view('admin.update-jasa', compact('jasa'));
    // }



    public function showChart()
    {
        // Ambil data, group by tanggal, dan hitung jumlah pesanan per tanggal
        $orders = DB::table('pesanan')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total_orders'))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return view('admin.home', ['orders' => $orders]);
    }
}
