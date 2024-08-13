<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard admin</title>
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

        <section class="w-full relative" style="background-image: url('/img/bgdbadmin.svg'); height: 100vh;">
            <div class="py-32 ml-20 flex"> <img class="rounded-xl" src="/img/logodbadmin.svg" alt="" >
            <div class="pt-12 text-center items-center justify-center">
                <span class="text-biru-tua font-bold text-9xl text-center">WashNJoy</span> <br><br>
                    <span class="text-white text-5xl">S i m p l y c i t y  R e d e f i n e d</span>
            </div>
            </div>
        </section>


        <section class="bg-biru_tengah" style="height: 100vh;">
            <div class="pt-12 ml-10">
                <span class="text-black font-bold text-2xl"></span>
         </div>
            <div class="bg-biru_muda mx-12 mt-10 rounded-xl flex justify-between border-2 border-biru-tua"style="height: 75vh;">
                <div class="mx-10 py-24 relative"> 
                    <div class="absolute py-16 ml-7">
                        <a href="{{route('show.manajementransaksi')}}"><img class="ml-14 py-16" src="/img/menu2.svg" alt="">
                    </div>
                    <div class="mx-5"><img src="/img/menu1.svg" alt=""></div>
            </div>
            <div class="mx-10 py-24 relative"> 
                <div class="absolute py-16 ml-7">
                    <a href="{{route('show.daftarpaketadmin')}}"><img class="ml-14 py-16" src="/img/menu4.svg" alt="">
                </div>
                <div class="mx-5"><img src="/img/menu3.svg" alt=""></div>
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