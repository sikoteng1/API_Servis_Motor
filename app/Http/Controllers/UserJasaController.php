<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserJasaController extends Controller
{
    public function viewjasa()
    {
        $jasas = Jasa::take(3)->get();
        return view('jasa', compact('jasas'));
    }

    public function checkout()
    {
        $jasas = Jasa::all();
        return view('checkout', compact('jasas'));
    }

    public function checkoutStore(Request $request)
    {
        // 1. Validasi data dan disimpan dalam variabel $validatedData
        $validatedData = $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'telefon_pemesan' => 'required|string|max:15',
            'alamat_pemesan' => 'required|string',
            'servis' => 'required|integer|exists:jasas,id',
            'tanggal_kedatangan' => 'required|date',
            'catatan_konsumen' => 'nullable|string',
            'checkbox' => 'required',
        ]);

        try {


            // 2. Siapkan data untuk disimpan, ambil dari validatedData
            $storedData = $validatedData;

            // Mapping 'servis' dari validasi ke 'jasa_id' di database
            $storedData['jasa_id'] = $validatedData['servis'];

            // 3. Tambahkan data yang tidak datang dari form langsung
            $storedData['user_id'] = auth()->id(); // Ambil user_id dari user yang sedang login
            // $dataUntukDisimpan['tanggal_pemesanan'] = now(); // Set tanggal pemesanan otomatis
            // $dataUntukDisimpan['status_pemesanan'] = 'Menunggu Konfirmasi'; // Contoh set default status

            // 4. Buat record baru di database menggunakan Model Pemesanan
            Pemesanan::create($storedData);

            // 5. Redirect ke halaman lain dengan pesan sukses
            return redirect()->route('home')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            Log::error("Error saving pemesanan: " . $e->getMessage()); // Log errornya
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data pemesanan. Mohon coba lagi.');
        }
    }
}
