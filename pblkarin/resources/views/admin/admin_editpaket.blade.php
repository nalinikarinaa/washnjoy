<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit paket admin</title>
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

        <section class="bg-biru_muda" style="height: 90vh;">

               <div class="text-center py-10"> <span class="text-black font-bold text-2xl"> Edit Paket </span>
            </div>
            <form action="{{ route('update.editpaket', $items->id) }}" method="POST">
                @csrf
                @method('PUT')
            <div class="bg-biru_tengah max-w-xl mt-5 py-8 mx-auto items-center justify-center rounded-xl " style="height: 70vh;">
                <div class=" ml-20">
                    <p>Nama Paket</p>
                    <input type="text" name="namapaket" value="{{$items->namapaket}}"   class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">
                </div>
                <div class="mt-2 ml-20">
                    <p>Waktu pengerjaan</p>
                    <input type="text" name="pengerjaan" value="{{$items->pengerjaan}}" class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">
                </div>
                <div class="mt-2 ml-20">
                    <p>Berat minimum</p>
                    <input type="text" name="berat" value="{{$items->berat}}" class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">
                </div>
                <div class="mt-2 ml-20">
                    <p>Harga</p>
                    <input type="text" name="harga" value="{{$items->harga}}" class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">
                </div>
                <div class="mt-8 mx-auto bg-biru-tua w-32 py-3 rounded-lg hover:bg-biru_muda   border-2 border-biru-tua items-center text-center">
                    <button class="font-bold text-center">Edit</button>
                </div>
            </div>
            @include('sweetalert::alert')
            </form>
            
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