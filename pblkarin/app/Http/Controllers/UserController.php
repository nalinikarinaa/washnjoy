<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;
use Illuminate\Support\Facedes\Storage;

class UserController extends Controller
{
     //SHOW HALAMAN PEMBAYARAN

     public function showpembayaran($id)
     {
        $items = Laundry::find($id);
        return view ('user.pembayaran', compact('items'));
     }

     //SHOW HALAMAN PEMBAYARAN DANA

     public function showpembayarandana($id)
     {
        $items = Laundry::find($id);
        return view ('user.pembayarandana', compact('items'));
     }
     public function tambahpembayaran(Request $request, $id)
     {
         $request->validate([
             
             'buktipembayaran' => 'required|mimes:png',
         ]);
 
         //TAMBAH DATA KE DATABASE
 
         //upload file
         
         $bukti = Laundry::findOrFail($id);
        
         if ($request->hasFile('buktipembayaran')) {
            if ($bukti->buktipembayaran) {
                Storage::delete($bukti->buktipembayaran);
            }
            $file = $request->file('buktipembayaran');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/images/', $filename);
            $bukti->buktipembayaran = 'public/images/'.$filename;

         }
 
         $bukti->save();
         return redirect()->route('show.manajementransaksiuser')->with('success', 'Pembayaran berhasil');
     }

     //SHOW HALAMAN PEMBAYARAN TRANSFER

     public function showpembayarantransfer($id)
     {
        $items = Laundry::find($id);
        return view ('user.pembayarantransfer', compact('items'));
     }

     //SHOW HALAMAN PEMBAYARAN COD

     public function showpembayarancod($id)
     {
        $items = Laundry::find($id);
        return view ('user.pembayarancod', compact('items'));
        return redirect()->route('show.manajementransaksiuser')->with('success');
     }

     //SHOW HALAMAN LOGIN

     public function showlogin($id)
     {
        $items = Laundry::find($id);
        return view ('login', compact('items'));
     }

     
     //SHOW HALAMAN DASHBOARD USER

     public function showdashboard($id)
     {
        $items = Laundry::find($id);
        return view ('user.dashboard', compact('items'));
     }

//SHOW HALAMAN DAFTAR PAKET

public function showdaftarpaket()
{
   $items = Paket::all();
   return view ('user.daftarpaket', compact('items'));
}

   //   //SHOW HALAMAN DAFTAR PAKET

   //   public function showdaftarpaket($id)
   //   {
   //      $items = Laundry::find($id);
   //      return view ('user.daftarpaket', compact('items'));
   //   }
}
