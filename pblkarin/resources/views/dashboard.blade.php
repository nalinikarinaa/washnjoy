
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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


  <section class="bg-biru_muda" style="height: 90vh;">
    <div class="pt-12 ml-10">
        <span class="text-black font-bold text-2xl">Popular Service</span>
 </div>
 <div class="relative">
    {{-- KONTEN 1 --}}
    <ul id="slider">
        <li class="w-full relative object-cover py-10">
            <img class="w-full object-cover" src="/img/fav2.svg">
        </li>
        <li class="w-full relative object-cover py-10">
          <img class="w-full object-cover" src="/img/fav1.svg">
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
    <section class="bg-biru_muda" style="height: 100vh;">
        <div class="pt-12 text-center">
            <span class="text-black font-bold text-2xl">WHAT WE OFFER</span>
     </div>

        <div class="container mx-auto py-16 flex justify-between space-x-6 ">
            
            {{-- //GAMBAR 1 --}}
            <div class="bg-white w-64 h-auto rounded-lg px-5 py-10 border-2 border-biru-tua">
                <div class="text-center">
                    <span class="text-black font-bold text-center text-xl"></span>
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{route('show.daftarpaket')}}"><img class="mr-5 py-5" src="/img/paket1.svg" alt=""></a>
                    <span class=""></span>
                </div>
                <div class="text-center">
                    <span class="text-xl font-bold"></span>
                    <span class="text-center font-bold text-xl">Paket Cuci Komplit</span>
                </div>
            </div>
            
            {{-- //GAMBAR 2 --}}
            <div class="bg-white w-64 h-auto rounded-lg px-5 py-10 border-2 border-biru-tua">
                <div class="text-center">
                    <span class="text-black font-bold text-center text-xl"></span>
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{route('show.daftarpaket')}}"> <img class="mr-5 py-5" src="/img/paket2.svg" alt=""></a>
                    <span class=""></span>
                </div>
                <div class="text-center">
                    <span class="text-xl font-bold"></span>
                    <span class="text-center font-bold text-xl">Paket Cuci Komplit</span>
                </div>
            </div>
            
            {{-- //GAMBAR 3 --}}
            <div class="bg-white w-64 h-auto rounded-lg px-5 py-10 border-2 border-biru-tua">
                <div class="text-center">
                    <span class="text-black font-bold text-center text-xl"></span>
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{route('show.daftarpaket')}}"><img class="mr-5 py-5" src="/img/paket3.svg" alt=""></a>
                    <span class=""></span>
                </div>
                <div class="text-center">
                    <span class="text-xl font-bold"></span>
                    <span class="text-center font-bold text-xl">Paket Cuci Komplit</span>
                </div>
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
</body>
</html>
