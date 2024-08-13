<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;

class VerifikasiController extends Controller
{
    //VERIFIKASI 
    public function showverifikasi()
    {
        return view ('admin.admin_transaksimasuk');
    }


    //EDIT VERIFIKASI
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'notelepon' => 'required',
            'tanggalordermasuk' => 'required',
            'jenispaket' => 'required',
            'alamat' => 'required',
            'keterangan' => 'nullable',
            'tanggalorderkeluar' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'status' => 'required',
            'pengiriman' => 'required',
        ]);

        $verifikasi = Laundry::findOrFail($id);
        $verifikasi->nama = $request->nama;
        $verifikasi->notelepon =$request->notelepon;
        $verifikasi->tanggalordermasuk =$request->tanggalordermasuk;
        $verifikasi->jenispaket =$request->jenispaket;
        $verifikasi->alamat =$request->alamat;
        $verifikasi->keterangan =$request->keterangan;
        $verifikasi->tanggalorderkeluar =$request->tanggalorderkeluar;
        $verifikasi->berat =$request->berat;
        $verifikasi->harga =$request->harga;
        $verifikasi->status =$request->status;
        $verifikasi->pengiriman =$request->pengiriman;
        $verifikasi->save();
        return redirect()->route('show.manajementransaksi')->with('success', 'Data berhasil diverifikasi');;
    }

    //MENAMPILKAN EDIT SESUAI ID
    public function edit($id)
    {
        $items = Laundry::findOrFail($id);
        return view('admin.admin_transaksimasuk', compact('items')); 
    }
}
