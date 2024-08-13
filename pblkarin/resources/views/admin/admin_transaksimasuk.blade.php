<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konfirmasi transaksi masuk</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="{{asset('/src/output.css')}}">
</head>
<body>

        <section>
            <form method="POST" action="{{ route('logoutadmin') }}">
                @csrf
            
            <nav class="bg-biru_tengah py-5 px-8 flex items-center ">
                <span class="text-biru-tua font-bold text-3xl">WashNJoy</span> 
            <div class="justify-between gap-30 ml-auto">
                <a class="py-3 px-4 text-white" href="{{route('admin.dashboard')}}">Dashboard</a>
                <a class="py-3 px-4 text-biru-tua" href="{{route('show.manajementransaksi')}}">Manajemen transaksi</a>
                <a class="py-3 px-4 text-biru-tua" href="{{route('show.daftarpaketadmin')}}">Daftar paket</a>
                <button class="py-3 px-4 text-red-500" type="submit">LOGOUT</button>
            </form>
            </nav>
            </div>
            </section>

        
        <section class="bg-biru_muda" style="height: 220vh;">
            <div class="pt-12 ml-10">
         </div>

        <div class="bg-biru_tengah mx-12  mt-10 rounded-xl flex justify-between">
    
            <div class="py-8 px-10 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 text-center">Transaksi masuk</h2>
                <form action="{{ route('update.verifikasi', $items->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <p>Nama</p> 
                            <div class="">
                                <input type="text" name="nama" value="{{$items->nama}}" class=" bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                            </div>
                            
                        </div>
                        <div class="sm:col-span-2 ">
                            <p>No Telepon</p>
                            <input type="text" name="notelepon" value="{{$items->notelepon}}"  class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        </div>
                        <div class="sm:col-span-2">
                            <p>Tanggal order masuk</p>
                            <input type="date" name="tanggalordermasuk" value="{{$items->tanggalordermasuk}}"  class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        </div>
                        <div class="sm:col-span-2">
                            <p>Jenis paket</p>
                            <input type="text" name="jenispaket" value="{{$items->jenispaket}}"  class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                            <input type="text" name="alamat" value="{{$items->alamat}}"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-2 border-biru-tua focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Keterangan</label>
                            <input type="text" name="keterangan" value="{{$items->keterangan}}"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-2 border-biru-tua focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <div class="sm:col-span-2">
                            <p>Tanggal selesai </p>
                            <input type="date" name="tanggalorderkeluar" value="{{$items->tanggalorderkeluar}}"  class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        </div>
                        <div class="sm:col-span-2">
                            <p>Berat</p>
                            <input type="text" name="berat" value="{{$items->berat}}"  class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        </div>
                        <div class="sm:col-span-2">
                            <p>Total Harga</p>
                            <input type="text" name="harga" value="{{$items->harga}}"  class="mt-2 w-96 rounded-xl bg-white border-2 border-biru-tua py-3 px-4">
                        </div>
                        <div class="sm:col-span-2">
                            <p>Status</p>
                            <select id="status" name="status" value="{{$items->status}}"  class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                <option selected="">LUNASI</option>
                                <option selected="">LUNAS</option>
                            </select>
                            </div>
                        <div class="sm:col-span-2">
                            <p>Pengiriman</p>
                            <select id="pengiriman" name="pengiriman" value="{{$items->pengiriman}}" class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option selected="">PENGAMBILAN</option>
                                <option selected="">PROSES</option>
                                <option selected="">PENGANTARAN</option>
                                <option selected="">DITERIMA</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-biru-tua rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">Verifikasi</button>
                </form>
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
      <span class="font-bold text-lg text-white"> © 2024 WashNJoy</span> 
  </div>
  </section>
</body>
</html>