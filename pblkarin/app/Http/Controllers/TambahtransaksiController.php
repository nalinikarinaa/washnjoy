<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;
use Illuminate\Support\Facedes\Storage;

class TambahtransaksiController extends Controller
{
    //SHOW HALAMAN TAMBAH TRANSAKSI

    public function showtransaksi()
    {
        return view ('user.tambahtransaksi');
    }

//SHOW MANAJEMEN TRANSAKSI USER
public function showmanajementransaksiuser()
{
    $items = Laundry::all();
    return view ('user.manajementransaksi', compact('items'));
}


    //TAMBAHTRANSAKSI
    // public function tambahtransaksi(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'notelepon' => 'required',
    //         'tanggalordermasuk' => 'required',
    //         'jenispaket' => 'required',
    //         'alamat' => 'required',
    //         'keterangan' => 'nullable',
    //         'buktipembayaran' => 'nullable|mimes:jpg,jpeg,png',
    //     ]);


    public function tambahtransaksi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'notelepon' => 'required',
            'tanggalordermasuk' => 'required',
            'jenispaket' => 'required',
            'alamat' => 'required',
            'keterangan' => 'nullable',
            'buktipembayaran' => 'nullable|mimes:jpg,jpeg,png|max:2048', // tambahkan validasi ukuran maksimal
            'status' => 'nullable',
            'pengiriman' => 'nullable',
        ]);
    
        // Simpan data transaksi ke database
        $transaksi = new Laundry();
        $transaksi->nama = $request->nama;
        $transaksi->notelepon = $request->notelepon;
        $transaksi->tanggalordermasuk = $request->tanggalordermasuk;
        $transaksi->jenispaket = $request->jenispaket;
        $transaksi->alamat = $request->alamat;
        $transaksi->keterangan = $request->keterangan;
        $transaksi->status = $request->status;
        $transaksi->pengiriman = $request->pengiriman;
    
        // Cek jika file buktipembayaran diunggah
        if ($request->hasFile('buktipembayaran')) {
            // Upload file
            $file = $request->file('buktipembayaran');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('public/bukti', $fileName);
    
            // Simpan path file ke dalam database
            $transaksi->buktipembayaran = $filePath;
        }
    
        // Simpan transaksi ke database
        $transaksi->save();
    
        // Flash message
        return redirect()->route('show.manajementransaksiuser')->with('success', 'Transaksi berhasil ditambahkan');;
         


    $transaksi = Laundry::find($id);

    if ($transaksi->photo) {
        $status = 'LUNAS';
    } else {
        $status = 'LUNASI';
    }

    return view('show.transaksi', compact('transaksi', 'status'));
}

// PaymentController.php
public function index()
{
    $transaksi = Laundry::all();

    foreach ($transaksi as $transaksi) {
        $transaksi->status = $transaksi->buktipembayaran ? 'LUNAS' : 'LUNASI';
    }

    return view('show.transaksi', compact('transaksi'));
}

            


    //     //TAMBAH DATA KE DATABASE

    //     //upload file
    //     $buktipembayaran = $request->file('buktipembayaran')->storeAs('public/bukti', $request->file('buktipembayaran')->getClientOriginalName());
    //     $transaksi = new Laundry();
    //     $transaksi->nama = $request->nama;
    //     $transaksi->notelepon =$request->notelepon;
    //     $transaksi->tanggalordermasuk =$request->tanggalordermasuk;
    //     $transaksi->jenispaket =$request->jenispaket;
    //     $transaksi->alamat =$request->alamat;
    //     $transaksi->keterangan =$request->keterangan;
    //     $transaksi->buktipembayaran = $buktipembayaran;

    //     $transaksi->save();
    //     session()->flash('success','Pesanan berhasil ditambahkan!');
    //     return redirect()->route('show.transaksi')
    //                      ->with('success', 'Pesanan berhasil ditambahkan');
    // }


    //MENAMPILKAN DATA TRANSAKSI DIHALAMAN MANAJEMEN TRANSAKSI
    public function showmanajementransaksi()
    {
        $items = Laundry::all();
        return view ('admin.admin_manajementransaksi', compact('items'));
    }
    public function edit($id)
    {
        $verifikasi = Laundry::findOrFail($id);
        return view('admin.admin_transaksimasuk', compact('verifikasi')); 
    }

  
    
        public function destroy($id)
        {
            $transaksi = Laundry::findOrFail($id);
            $transaksi->delete();
    
            return redirect()->route('update.showmanajementransaksi')->with('success', 'Transaksi berhasil dihapus');
        }

       

    
}
