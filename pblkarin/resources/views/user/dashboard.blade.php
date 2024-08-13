<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <section>
    <nav class="bg-biru_tengah py-5 px-8 flex items-center "> 
    <span class="text-biru-tua font-bold text-3xl">WashNJoy</span>
    <div class="justify-between gap-30 ml-auto">
        <a class="py-3 px-4 text-white" href="dashboard">Dashboard</a>
        <a class="py-3 px-4 text-biru-tua" href="daftarpaket">Daftar Paket</a>
        <a class="py-3 px-4 text-biru-tua" href="tambahtransaksi">Tambah Transaksi</a>
        <a class="py-3 px-4 text-biru-tua" href="manajementransaksi">Manajemen Transaksi</a>
        <a class="py-3 px-4 text-biru-tua" href="profil">Profil</a>
    </nav>
    </div>
    </section>

<section class=" w-full " style="background-image: url('/img/bgdashboard.svg'); height: 90vh;">
<div class="flex"><div class="mx-20 py-20"> <img class="rounded-xl" src="/img/cucian.svg" alt="" > </div>
<div class=" mt-60"> 
    <span class="text-biru-tua font-bold text-4xl ml-16">WE DO IT WELL</span>
    <br>
    <br>
    <span class="text-black font-bold text-3xl">we'll do your laundry for you </span>
</div>
</div>     
  </section>


  <section class="bg-biru_muda" style="height: 150vh;">
    <div class="pt-12 ml-10">
        <span class="text-black font-bold text-2xl">Popular Service</span>
 </div>
 <div class="relative">
    {{-- KONTEN 1 --}}
    <ul id="slider">
        <li class="w-full relative object-cover">
            <img class="w-full object-cover" src="/img/fav1.svg">
        </li>
        <li class="w-full relative object-cover">
          <img class="w-full object-cover" src="/img/fav2.svg">
      </li>
      </ul>
      <div class="absolute px-5 flex h-full w-full top-0 left-0 z-40">
          <div class="my-auto w-full flex justify-between">
              <button onclick="prev()" class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg pointer-events-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                  </svg>
              </button>
              <button onclick="next()" class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg pointer-events-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                  </svg>
              </button>

          </div>
      </div>
  </div>
  </section>

  <section>
    <section class="bg-biru-tua" style="height: 70vh;">
        <div class="pt-12 text-center">
            <span class="text-black font-bold text-2xl">WHAT WE OFFER</span>
     </div>
     <div class="flex justify-between mt-16 mx-auto w-11/12 max-w-4xl px-4">
        <div class="relative flex-1 flex justify-center">
            <div>
                <a href="{{ route('show.daftarpaket') }}"><img class="shadow-xl rounded-2xl" src="/img/what1.svg" alt=""></a>
            </div>
            <div class="bg-white w-52 h-28 absolute flex items-center justify-center -translate-y-14 transform translate-x-1/2 rounded-lg">
                <a href="{{ route('show.daftarpaket') }}" class="font-medium text-center">Paket Cuci Komplit</a>
            </div>
        </div>
        <div class="relative flex-1 flex justify-center">
            <div>
                <a href="daftarpaket"><img class="shadow-xl rounded-2xl" src="/img/what2.svg" alt="" cursor="pointer"></a>
            </div>
            <div class="bg-white w-52 h-28 absolute flex items-center justify-center -translate-y-14 transform translate-x-1/2 rounded-lg">
                <a href="daftarpaket" class="font-medium text-center">Paket Dry Clean</a>
            </div>
        </div>
        <div class="relative flex-1 flex justify-center">
            <div>
                <a href="daftarpaket"><img class="shadow-xl rounded-2xl" src="/img/what3.svg" alt=""></a>
            </div>
            <div class="bg-white w-52 h-28 absolute flex items-center justify-center -translate-y-14 transform translate-x-1/2 rounded-lg">
                <a href="daftarpaket" class="font-medium text-center">Paket Cuci Satuan</a>
            </div>
        </div>
    </div>
    
    
  </section>

  <section>
    <section class="bg-biru_muda" style="height: 70vh;">
        <div class="pt-12 text-center flex items-center justify-center">
            <span class="text-black font-bold text-2xl text-center">Tersedia banyak pilihan paket  laundry <br>
                dengan berbagai pilihan harga yang terjangkau. <br>
                Order sekarang <br>
                 dan sesuaikan dengan kebutuhanmu!
                 </span>
                 <div class=""> <img class="rounded-xl" src="/img/jempol.svg" alt="" > </div> 
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

  <script src="js/script.js"></script>  
        <script>
          let currentIndex = 0;
          const slides = document.querySelectorAll('#slider li');
  
          function showSlide(index) {
              slides.forEach((slide, i) => {
                  slide.classList.toggle('hidden', i !== index);
              });
          }
  
          function prev() {
              currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
              showSlide(currentIndex);
          }
  
          function next() {
              currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
              showSlide(currentIndex);
          }
  
          showSlide(currentIndex);
      </script>
</body>
</html>