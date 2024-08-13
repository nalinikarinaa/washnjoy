<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konfirmasi pembayaran</title>
    <link rel="stylesheet" href="../src/output.css">
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

        <section class="w-full relative" style="background-image: url('/img/bgkonfirm.svg'); height: 70vh;">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <img class="rounded-xl" src="/img/tengah2.svg" alt="">
                    <div class="absolute inset-0 flex flex-col justify-center">
                      <div>
                        <span class="text-biru_tengah font-bold text-4xl">KONFIRMASI PEMBAYARAN</span>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white flex justify-center items-center py-24" style="height: 100vh;">
            <div class="bg-biru_tengah py-20 mt-10 rounded-xl flex-col justify-center items-center">
                <div class="bg-biru_muda px-52 py-3 rounded-xl items-center text-center mx-10">
                    <span class="text-black font-bold text-xl ">Bank BCA <br> </span>
                    <span class="text-black font-bold text-xl ">No Virtual Account: 122334457623547498905<br> </span>
                    <span class="text-black font-bold text-xl ">Bank BRI <br> </span>
                    <span class="text-black font-bold text-xl ">No Virtual Account: 122334457623547498905<br> </span>
                </div>

                <form action="{{ route('tambah.pembayaran', $items->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="bg-biru_muda px-52 py-3 mt-4 rounded-xl items-center text-center mx-10">

                <div class="mb-6">
                    <label
                      for="file_input"
                      class="block mb-2 text-xl font-bold text-gray-900"
                      >Bukti transaksi</label
                    >
                    <input
                      type="file"
                      id="file_input"
                      name="buktipembayaran"
                      class="bg-gray-50 border border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-biru-tua focus:border-biru-tua block w-full p-1"
                      placeholder=""
                      required accept=".png"
                    />
                </div>
                </div>
                <div class="mt-8 mx-auto bg-biru_muda w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda items-center text-center">
                    <button  type="submit" class="font-bold ">Selanjutnya</button>
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
      <span class="font-bold text-lg text-white underline"> © 2024 WashNJoy</span> 
  </div>
  </section>
</body>
</html>