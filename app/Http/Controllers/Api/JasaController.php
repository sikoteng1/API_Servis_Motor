<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jasa;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource. = = = = = = = = = = = = =
     */
    public function indexJasa()
    {
        $jasas = Jasa::all();
        return response()->json($jasas);
    }

    public function indexPemesanan()
    {
        $loggedInUserId = auth()->id();
        if(!$loggedInUserId) {
            return response()->json(['message' => 'Belum login ya? Login dulu gih.', 401 ]);
        }

        $pemesanans = Pemesanan::where('user_id', $loggedInUserId)->get();

        if ($pemesanans->isEmpty()) {
            return response()->json([
                'message' => 'Belum Ada Riwayat Pemesanan',
                'data' => []
            ], 200);

        } else {
            return response()->json([
                'message' => 'Data Riwayat Pemesanan Ditemukan',
                'data' => $pemesanans
            ], 200);
        }
    }

    /**
     * Show the form for creating a new resource. = = = = = = = = = = = = =
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. = = = = = = = = = = = = =
     */
    public function pemesananStore(Request $request)
    {

        $validatedData = $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'telefon_pemesan' => 'required|string|max:15',
            'alamat_pemesan' => 'required|string',
            'servis' => 'required|integer|exists:jasas,id', // Validasi exists:jasas,id memastikan ID jasa ada di tabel jasas
            'tanggal_kedatangan' => 'required|date',
            'catatan_konsumen' => 'required|string',

        ]);


        // return response()->json([
        //     'userr' =>  auth('sanctum')->user()->id
        // ]);

        try {
            $dataUntukDisimpan = $validatedData;
            $dataUntukDisimpan['jasa_id'] = $validatedData['servis'];
            $dataUntukDisimpan['user_id'] = auth('sanctum')->user()->id;
            $dataUntukDisimpan['tanggal_pemesanan'] = now();
            $dataUntukDisimpan['status_pemesanan'] = 'Menunggu Konfirmasi';

            $pemesanan = Pemesanan::create($dataUntukDisimpan);

            return response()->json([
                'message' => 'Pemesanan berhasil dibuat!',
                'data' => $pemesanan, // Opsional: kembalikan data pemesanan yang baru dibuat
            ], 201); // Status 201 Created menandakan resource baru berhasil dibuat

        } catch (\Exception $e) {
            Log::error("Error saving pemesanan via API: " . $e->getMessage()); // Log errornya

            return response()->json([
                'message' => 'Terjadi kesalahan saat membuat pemesanan. Mohon coba lagi.',
                'error' => $e->getMessage(),
            ], 500); // Status 500 Internal Server Error menandakan ada error di server

        }
    }

    /**
     * Display the specified resource. = = = = = = = = = = = = =
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. = = = = = = = = = = = = =
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage. = = = = = = = = = = = = =
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. = = = = = = = = = = = = =
     */
    public function destroy(string $id)
    {
        //
    }
}
