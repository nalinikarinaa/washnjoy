<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar paket</title>
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

        <section class="bg-biru_muda" style="height: 75vh;">
            <div>
                <div class="">
                  <img src="/img/daftarpaket.svg" alt="">
                </div>
                <div class="bg-biru_tengah mx-12 h-40 -mt-1 items-center justify-center rounded-xl flex">
                    <span class="text-black font-bold py-14 px-5 text-5xl ">Daftar Paket Tersedia </span>
                </div>
        </section>
        
        <section class="bg-biru_muda" style="height: 200vh;">
        <div class="bg-biru_tengah mx-12 h-20 -mt-1 items-center justify-center rounded-xl flex">
    <p></p>
    </div>
    
        <div class="mt-14 ml-auto mr-10 bg-biru-tua w-40 items-end py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru-tua">
            <button class="font-bold "><a href="tambahtransaksi">+ Tambah transaksi</a></button>
    </div>
    
    
    
        <!--Gambar 1-->
        <!--EDIT POSISI 3 KOTAK DISINI-->
        <section class="container mx-auto py-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($items as $edit)
                    <div class="bg-white w-60 h-80 mx-auto rounded-lg px-5 py-10 border-2 border-biru-tua ">
                        <div class="text-center">
                            <span class="text-black font-bold text-center text-xl">{{$edit->namapaket}} </span>
                        </div>
                        <div class="flex items-center ">
                            <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                            <span class="">{{$edit->pengerjaan}} hari waktu kerja </span>
                        </div>
                        <div class="flex items-center ">
                            <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                            <span class=""> berat minimal {{$edit->berat}} Kg</span>
                        </div>
                        <span>------------------------------</span>
                        <div class="text-center">
                            <span class="text-xl font-bold"> Rp. {{$edit->harga}}</span>
                            <span class="text-center"> /Kg</span>
                        </div>
                        {{-- <div class="mt-8 mx-10 bg-biru_tengah w-32 py-3 rounded-lg hover:bg-biru-tua border-2 border-biru_muda items-center text-center">
                            <button class="font-bold text-center">
                                <a href="{{ route('show.editpaket', $edit->id) }}">Edit</a>
                            </button>
                        </div> --}}
                    </div>
                @endforeach
            </div>
        </section>
       
        {{-- <div class="flex items-center justify-between mx-40 mt-10">
        <!---->
            <div class="bg-white w-60 h-72  mx-8 rounded-lg px-5  py-10">
                <div class="text-center">
                <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                </div>
                
                    <div class="flex items-center ">
                        <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                        <span class=""> 5 hari kerja</span>
                    </div>
                    <div class="flex items-center ">
                        <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                        <span class=""> berat minimal 1/2 Kg</span>
                    </div>
                    <span>-------------------------------</span>
                    <div class=" text-center">
                    <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                    <span class="text-center"> /Kg</span>
                </div>
            </div>
        
        <!--Gambar 2-->
        
            <div class="bg-biru_tengah w-60 h-72  mx-8 rounded-lg px-5  py-10">
                <div class="text-center">
                <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                </div>
                
                    <div class="flex items-center ">
                        <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                        <span class=""> 5 hari kerja</span>
                    </div>
                    <div class="flex items-center ">
                        <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                        <span class=""> berat minimal 1/2 Kg</span>
                    </div>
                    <span>-------------------------------</span>
                    <div class=" text-center">
                    <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                    <span class="text-center"> /Kg</span>
                </div>
            </div>
        
        <!--Gambar 3-->
        
            <div class="bg-white w-60 h-72  mx-8 rounded-lg px-5  py-10">
                <div class="text-center">
                <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                </div>
                
                    <div class="flex items-center ">
                        <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                        <span class=""> 5 hari kerja</span>
                    </div>
                    <div class="flex items-center ">
                        <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                        <span class=""> berat minimal 1/2 Kg</span>
                    </div>
                    <span>-------------------------------</span>
                    <div class=" text-center">
                    <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                    <span class="text-center"> /Kg</span>
                </div>
            </div>
        </div>

         <!--Gambar 1-->
        <!--EDIT POSISI 3 KOTAK DISINI-->
        <div class="flex items-center justify-between mx-40 mt-20">
            <!---->
                <div class="bg-biru_tengah w-60 h-72  mx-8 rounded-lg px-5  py-10">
                    <div class="text-center">
                    <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                    </div>
                    
                        <div class="flex items-center ">
                            <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                            <span class=""> 5 hari kerja</span>
                        </div>
                        <div class="flex items-center ">
                            <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                            <span class=""> berat minimal 1/2 Kg</span>
                        </div>
                        <span>-------------------------------</span>
                        <div class=" text-center">
                        <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                        <span class="text-center"> /Kg</span>
                    </div>
                </div>
            
            <!--Gambar 2-->
            
                <div class="bg-white w-60 h-72  mx-8 rounded-lg px-5  py-10">
                    <div class="text-center">
                    <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                    </div>
                    
                        <div class="flex items-center ">
                            <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                            <span class=""> 5 hari kerja</span>
                        </div>
                        <div class="flex items-center ">
                            <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                            <span class=""> berat minimal 1/2 Kg</span>
                        </div>
                        <span>-------------------------------</span>
                        <div class=" text-center">
                        <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                        <span class="text-center"> /Kg</span>
                    </div>
                </div>
            
            <!--Gambar 3-->
            
                <div class="bg-biru_tengah w-60 h-72  mx-8 rounded-lg px-5  py-10">
                    <div class="text-center">
                    <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                    </div>
                    
                        <div class="flex items-center ">
                            <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                            <span class=""> 5 hari kerja</span>
                        </div>
                        <div class="flex items-center ">
                            <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                            <span class=""> berat minimal 1/2 Kg</span>
                        </div>
                        <span>-------------------------------</span>
                        <div class=" text-center">
                        <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                        <span class="text-center"> /Kg</span>
                    </div>
                </div>
        </div>

         <!--Gambar 1-->
        <!--EDIT POSISI 3 KOTAK DISINI-->
        <div class="flex items-center justify-between mx-40 mt-20">
            <!---->
                <div class="bg-white w-60 h-72  mx-8 rounded-lg px-5  py-10">
                    <div class="text-center">
                    <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                    </div>
                    
                        <div class="flex items-center ">
                            <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                            <span class=""> 5 hari kerja</span>
                        </div>
                        <div class="flex items-center ">
                            <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                            <span class=""> berat minimal 1/2 Kg</span>
                        </div>
                        <span>-------------------------------</span>
                        <div class=" text-center">
                        <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                        <span class="text-center"> /Kg</span>
                    </div>
                </div>
            
            <!--Gambar 2-->
            
                <div class="bg-biru_tengah w-60 h-72  mx-8 rounded-lg px-5  py-10">
                    <div class="text-center">
                    <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                    </div>
                    
                        <div class="flex items-center ">
                            <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                            <span class=""> 5 hari kerja</span>
                        </div>
                        <div class="flex items-center ">
                            <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                            <span class=""> berat minimal 1/2 Kg</span>
                        </div>
                        <span>-------------------------------</span>
                        <div class=" text-center">
                        <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                        <span class="text-center"> /Kg</span>
                    </div>
                </div>
            
            <!--Gambar 3-->
            
                <div class="bg-white w-60 h-72  mx-8 rounded-lg px-5  py-10">
                    <div class="text-center">
                    <span class="text-black font-bold text-center text-xl">PAKET CUCI KOMPLIT </span>
                    </div>
                    
                        <div class="flex items-center ">
                            <img class="mr-5 py-5" src="/img/cekliss.svg" alt="">
                            <span class=""> 5 hari kerja</span>
                        </div>
                        <div class="flex items-center ">
                            <img class="mr-5 py-2" src="/img/cekliss.svg" alt="">
                            <span class=""> berat minimal 1/2 Kg</span>
                        </div>
                        <span>-------------------------------</span>
                        <div class=" text-center">
                        <span class=" text-xl font-bold"> Rp. 5.000,00</span>
                        <span class="text-center"> /Kg</span>
                    </div>
                </div>
        </div>
        </section> --}}

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