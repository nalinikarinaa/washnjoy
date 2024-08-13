<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah transaksi</title>
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
        
        
        <section class="w-full relative" style="background-image: url('/img/bgtambahtransaksi.svg'); height: 70vh;">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <img class="rounded-xl" src="/img/tengah2.svg" alt="">
                    <div class="absolute inset-0 flex flex-col justify-center">
                      <div>
                        <span class="text-biru_tengah font-bold text-4xl">TAMBAH TRANSAKSI</span>
                      </div>
                    </div>
                </div>
            </div>
        </section>


       

        <section class="bg-biru_muda" style="height: 180vh;">
            <div class="pt-12 ml-10">
         </div>

         

         <form action="{{ route('tambah.transaksi') }}" method="POST">
            @csrf
        <div class="bg-biru_tengah mx-12  mt-10 rounded-xl flex justify-between">

            <div class="py-8 px-10 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900">Tambah Transaksi</h2>
                <form action="#">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" name="nama" id="nama" class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Nama" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="notelepon" class="block mb-2 text-sm font-medium text-gray-900">No telepon</label>
                            <input type="text" name="notelepon" id="brand" class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="No. Telepon" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="tanggalordermasuk" class="block mb-2 text-sm font-medium text-gray-900">Tanggal order masuk</label>
                            <input type="date" name="tanggalordermasuk" id="tanggalordermasuk" class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Tanggal" required="">
                        </div>
                        <div class="">
                            <label for="jenispaket" class="block mb-2 text-sm font-medium text-gray-900">Jenis paket</label>
                            <select id="jenispaket" name="jenispaket" class="bg-gray-50 border-2 border-biru-tua text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option selected="">Paket cuci komplit</option>
                                <option value="komplit ekspress">Paket cuci komplit ekspress</option>
                                <option value="dry clean">Paket dry clean</option>
                                <option value="dry clean ekspress">Paket dry clean ekspress</option>
                                <option value="satuan">Paket cuci satuan</option>
                                <option value="bedcover">Paket cuci bedcover</option>
                                <option value="sprei">Paket cuci sprei</option>
                                <option value="boneka">Paket cuci boneka</option>
                                <option value="goerden">Paket cuci gorden</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                            <textarea id="alamat" name="alamat" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-2 border-biru-tua focus:ring-primary-500 focus:border-primary-500" placeholder="Alamat"></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-2 border-biru-tua focus:ring-primary-500 focus:border-primary-500" placeholder="Keterangan"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-biru-tua rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">Tambah Pesanan</button>
                   
                    @include('sweetalert::alert')
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
      <span class="font-bold text-lg text-white underline"> © 2024 WashNJoy</span> 
  </div>
  </section>



  

</body>
</html>