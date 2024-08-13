<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manajemen transaksi admin</title>
    <link rel="stylesheet" href="../src/output.css">
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

        <section class="w-full relative" style="background-image: url('/img/bgmantransaksi.svg'); height: 70vh;">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <img class="rounded-xl" src="/img/tengah2.svg" alt="">
                    <div class="absolute inset-0 flex flex-col justify-center">
                      <div>
                        <span class="text-biru_tengah font-bold text-4xl">MANAJEMEN TRANSAKSI</span>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-biru_muda h-auto py-20">
            <div class="mx-auto text-center py-10">
                <span class="text-blacktext-center items-center font-bold text-4xl">Transaksi masuk</span>
              </div>
        
            
              @foreach($items as $transaksi)
                <div class="bg-biru-tua mx-60 h-auto mt-20 justify-center rounded-xl">
                    <div class="bg-biru_tengah py-10  h-auto mt-12 translate-y-10 rounded-xl justify-center">
                        <ul class="list-disc text-black font-bold px-10 py-4">
                            <li>Nama: {{$transaksi->nama}}</li>
                            <li>No telepon: {{$transaksi->notelepon}}  </li>
                            <li>Nama paket: {{$transaksi->jenispaket}} </li>
                            <li>Alamat: {{$transaksi->alamat}} </li>
                            <li>Keterangan: {{$transaksi->keterangan}} </li>
                            <li>Tanggal order: {{$transaksi->tanggalordermasuk}} </li>
                            <li>Tanggal selesai: {{$transaksi->tanggalorderkeluar}} </li>
                            <li>Berat: {{$transaksi->berat}} Kg </li>
                            <li>Total harga: Rp. {{$transaksi->harga}},00 </li>
                            <li>Pengiriman: {{$transaksi->pengiriman}} </li>
                            <li>Status: {{$transaksi->status}} </li>
                          </ul>
                          <div class="flex text-center items-center ml-auto justify-end ">
                            <div class="mt-8   bg-merah w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda">
                                 <a href="{{ route('edit.verifikasi',$transaksi->id)}}">Verifikasi</a>
                            </div>
                          
                          </div>
                    </div>  
                </div>  
                @include('sweetalert::alert')
                <div class="">
            </div>
            @endforeach 
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