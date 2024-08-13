<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembayaran</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="{{asset('/src/output.css')}}">
</head>
<body>
    <section>
        <nav class="bg-biru_tengah py-5 px-8 flex items-center "> 
        <span class="text-biru-tua font-bold text-3xl">WashNJoy</span>
        <div class="justify-between gap-30 ml-auto">
            <a class="py-3 px-4 text-white" href="{{route('dashboard')}}">Dashboard</a>
            <a class="py-3 px-4 text-biru-tua" href="{{route('show.daftarpaket')}}">Daftar Paket</a>
            <a class="py-3 px-4 text-biru-tua" href="{{route('show.transaksi')}}">Tambah Transaksi</a>
            <a class="py-3 px-4 text-biru-tua" href="{{route('show.manajementransaksiuser')}}">Manajemen Transaksi</a>
            <a class="py-3 px-4 text-biru-tua" href="{{ route('profile.edit') }}">Profil</a>
        </nav>
        </div>
        </section>

        
        <section class="w-full relative" style="background-image: url('/img/bgpembayaran.svg'); height: 70vh;">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <img class="rounded-xl" src="/img/tengah2.svg" alt="">
                    <div class="absolute inset-0 flex flex-col justify-center">
                      <div>
                        <span class="text-biru_tengah font-bold text-4xl">PEMBAYARAN</span>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-biru-tua" style="height: 80vh;">
            <div class="py-8 px-10 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-2xl font-bold text-gray-900 text-center">Bill Pembayaran</h2>
                <form action="#">
                    
            <div class="pt-12 ml-10 ">
                <div class="w-3/4 mb-6 mx-auto">
                    <label for="jenispaket" class="block mb-2 text-sm font-medium text-gray-900">Jenis paket</label>
                    <div type="text" name="jenispaket" id="jenispaket" class="bg-gray-50 border border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        <p>{{$items->jenispaket}}</p>
                    </div>
                <div class="">
                    <label for="berat" class="block mb-2 text-sm font-medium text-gray-900">Berat (Kg)</label>
                    <div type="text" name="berat" id="berat"  class="bg-gray-50 border border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        <p>{{$items->berat}}</p>
                </div>
                <div class="">
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Total Harga</label>
                    <div type="text" name="harga" id="harga" class="bg-gray-50 border border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        <p>{{$items->harga}}</p>
                 </div>
         </div>
        </form>
        
    </section>

    <section class="bg-biru_tengah" style="height: 60vh;">

        <div class="py-8 px-10 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-2xl font-bold text-gray-900 text-center">Pilih Pembayaran</h2>
        
                <div class="w-3/4 mt-4 mx-auto"> 
                    <button type="submit" class="py-4 bg-biru-tua w-full rounded text-blue-50 font-bold hover:bg-white"> <a href="{{route('show.pembayarancod',$items->id)}}">Cash On Delivery (COD)</a> </button>
                </div>
                <div class="w-3/4 mt-4 mx-auto"> 
                    <button type="submit" class="py-4 bg-biru-tua w-full rounded text-blue-50 font-bold hover:bg-white"><a href="{{route('show.pembayarandana',$items->id)}}">DANA </a></button>
                </div>
                <div class="w-3/4 mt-4 mx-auto"> 
                    <button type="submit" class="py-4 bg-biru-tua w-full rounded text-blue-50 font-bold hover:bg-white"><a href="{{route('show.pembayarantransfer',$items->id)}}">Transfer BANK</a></button>
                </div>
     </div>
    </section>

      <!--Footer-->
  <section class="border-t-4 border-biru_hover h-60 py-10 bg-biru_hover px-8 flex">
    <div>
        <img src="/img/logo.svg" alt="">
    </div>
        <div class="py-10 mr-auto">
        <div class="flex items-center ">
           <img class="mr-5" src="/img/icon1.svg" alt="">
           <span class="font-bold text-lg text-white "> Jl. Veteran Malang Indonesia</span> <br>
       </div>
       <div class="flex items-center ">
           <img class="mr-5" src="/img/icon2.svg" alt="">
           <span class="font-bold text-lg text-white"> 082-447-746-899</span>
       </div>
       <div class="flex items-center ">
           <img class="mr-5" src="/img/icon3.svg" alt="">
           <span class="font-bold text-lg text-white"> WashNJoy@gmail.com</span> 
       </div>  
    </div>
    <div class="mt-auto mr-40">
      <span class="font-bold text-lg text-white underline"> © 2024 WashNJoy</span> 
  </div>
  </section>
</body>
</html>