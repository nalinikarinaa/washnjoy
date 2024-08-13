<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use Illuminate\Support\Facedes\Storage;

class PaketController extends Controller
{
     //EDIT PAKET
     public function update(Request $request, $id)
     {
         $request->validate([
             'namapaket' => 'required',
             'pengerjaan' => 'required',
             'berat' => 'required',
             'harga' => 'required',
         ]);
 
         $edit = Paket::findOrFail($id);
         $edit->namapaket = $request->namapaket;
         $edit->pengerjaan = $request->pengerjaan;
         $edit->berat = $request->berat;
         $edit->harga = $request->harga;
         $edit->save();
         return redirect()->route('show.daftarpaketadmin')->with('success', 'Paket berhasil diedit');
     }
 
    

      //MENAMPILKAN DATA PAKET DIHALAMAN DAFTAR PAKET
    public function showdaftarpaketadmin()
    {
        $items = Paket::all();
        return view ('admin.admin_daftarpaket', compact('items'));
    }
  //SHOW HALAMAN DAFTAR PAKET

     public function showdaftarpaket()
     {
        $items = Paket::all();
        return view ('user.daftarpaket', compact('items'));
     }

      

 //MENAMPILKAN EDIT SESUAI ID
 public function showeditpaket($id)
 {
     $items = Paket::findOrFail($id);
     return view('admin.admin_editpaket', compact('items'))->with('success', 'Transaksi berhasil ditambahkan'); 
     return redirect()->route('show.daftarpaketadmin')->with('success', 'Transaksi berhasil ditambahkan');

    
 }

//  public function edit($id)
// {
//     try {
//         $items = Paket::findOrFail($id);
//         return view('admin_daftarpaket', compact('items'));
//     } catch (ModelNotFoundException $e) {
//         // Tangani kasus ketika item tidak ditemukan
//         return redirect()->route('some.route')->with('error', 'Item not found');
//     }
// }


//  // Menampilkan form edit dengan data paket berdasarkan ID
//  public function edit($id)
//  {
//      $items = Paket::findOrFail($id);
//      return view('admin_daftarpaket', compact('items'));
//  }

 


}

