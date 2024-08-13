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

        <section class="w-full relative" style="background-image: url('/img/bgprofil.svg'); height: 70vh;">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <img class="rounded-xl" src="/img/tengah2.svg" alt="">
                    <div class="absolute inset-0 flex flex-col justify-center">
                      <div>
                        <span class="text-biru_tengah font-bold text-4xl">PROFIL PENGGUNA</span>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white" style="height: 125vh;">
            <div class="text-center py-10"> <span class="text-black font-bold text-2xl"> </span>
            </div>
            <div class="bg-biru_tengah max-w-xl mt-5 py-8 mx-auto items-center justify-center rounded-xl " style="height: 100vh;">
                <div class="justify-center mx-auto"><img class="mx-auto" src="/img/profil.svg" alt=""></div>

                <div class=" ml-20">
                    <p>Nama</p>
                    <div class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">Karin Haddid</div>
                </div>
                <div class="mt-2 ml-20">
                    <p>Username</p>
                    <div class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">@karinahaddid</div>
                </div>
                <div class="mt-2 ml-20">
                    <p>Email</p>
                    <div class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">karinahaddid@gmail.com</div>
                </div>
                <div class="mt-2 ml-20">
                    <p>Password</p>
                    <div class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">imyoungestchild</div>
                </div>

                <div class="flex">
                <div class="mt-8 mx-auto bg-biru-tua w-32 py-3 rounded-lg hover:bg-biru_muda   border-2 border-biru-tua items-center text-center">
                    <button class="font-bold text-center">Edit</button>
                </div>
                <div class="mt-8 mx-auto bg-biru-tua w-32 py-3 rounded-lg hover:bg-biru_muda   border-2 border-biru-tua items-center text-center">
                    <button class="font-bold text-center">Simpan</button>
                </div>
            </div>
            <div class="mt-8 mx-auto bg-merah w-32 py-3 rounded-lg hover:bg-biru_muda   border-2 border-merah items-center text-center">
                <button class="font-bold text-center">Logout</button>
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
      <span class="font-bold text-lg text-white"> © 2024 WashNJoy</span> 
  </div>
  </section>
</body>
</html>