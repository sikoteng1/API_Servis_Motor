<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\harga;
use App\Models\Jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserJasaController extends Controller
{
    public function viewjasa()
    {
        $jasa = Jasa::take(3)->get();
        return view('jasa', compact('jasa'));
    }

    public function checkout()
    {
        $jasa = Jasa::all();
        return view('checkout', compact('jasa'));
    }

    public function checkoutStore(Request $request)
    {
        // dd($request->input("nomor_telepon"));
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:255',
            'alamat' => 'required|string',
            'servis' => 'required|string|max:255',
            'tanggal_kedatangan' => 'required|date',
            'checkbox' => 'required',
        ]);

        try {
            // code 1
            // code
            Checkout::create([
                'nama_pemesan' => $request->input('nama_pemesan'),
                'nomor_telepon' => $request->input('nomor_telepon'),
                'alamat' => $request->input('alamat'),
                'jasa_id' => $request->input('servis'),
                'catatan_konsumen' => $request->input('catatan_konsumen'),
                'tanggal_kedatangan' => $request->input('tanggal_kedatangan'),
                'user_id' => auth()->id(), // Menyertakan user_id
            ]);

            return redirect('/')->with('success', 'Data berhasil disimpan!');

        } catch (\Exception $e) {
            return dd("error :".$e->getMessage());
        }

        // dd($request);

    //     $user = Auth::user();
    //     $jasa = Jasa::findOrFail($request->jasa_id)->get();

    //     $validator = Validator::make($request->all(), [
    //         'nama_pemesan' => 'required|string|max:255',
    //         'nomor_telepon' => 'required|integer|min:10|max:15',
    //         'alamat' => 'required|string|max:255',
    //         'servis' => 'required|string|max:255',
    //         'catatan_konsumen' => 'required|string|max:255',
    //         'tanggal_kedatangan' => 'required|date',
    //         'checkbox' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return view('checkout');
    //     }

    //     $checkout = [
    //     'user_id' => $user->id ,
    //     'nama_pemesan' => $request->nama_pemesan,
    //     'nomor_telepon' => $request->nomor_telepon,
    //     'alamat' => $request->alamat,
    //     'jasa_id' => $jasa->id,
    //     'catatan_konsumen' => $request->catatan_konsumen,
    //     'tanggal_kedatangan' => $request->tanggal_kedatangan,
    //     ];

    //     Checkout::create($checkout);

    //     return redirect()->route('checkout')->with('success', 'Checkout created successfully.');
    }


}
