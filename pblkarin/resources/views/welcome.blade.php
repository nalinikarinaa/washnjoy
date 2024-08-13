<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>

  
    <section>
        @if (Route::has('login'))
        <nav class="bg-biru_tengah py-5 px-8 flex items-center "> 
        <span class="text-biru-tua font-bold text-3xl">WashNJoy</span>
        <div class="justify-between gap-30 ml-auto">
            @auth
            <a class="py-3 px-4 text-biru-tua font-bold" href="{{ url('/dashboard') }}">DASHBOARD</a>
            @else
            <a class="py-3 px-4 text-biru-tua font-bold" href="{{ route('login') }}">LOGIN</a>
            @if (Route::has('register'))
            <a class="py-3 px-4 text-biru-tua font-bold" href="{{ route('register') }}">REGISTER</a>
            @endif
            @endauth
            @endif
        </nav>
        </div>
        </section>

  <section>
    <div class="relative">
        {{-- KONTEN 1 --}}
        <ul id="slider">
            <li class="w-full relative object-cover" style="background-image: url('/img/bgdbadmin.svg'); height: 100vh;">
                <div class="py-32 ml-20 flex">
                    <img class="rounded-xl" src="/img/logodbadmin.svg" alt="">
                    <div class="pt-12 text-center items-center justify-center">
                        <span class="text-biru-tua font-bold text-9xl text-center">WashNJoy</span>
                        <br><br>
                        <span class="text-white text-5xl">Simplicity Redefined</span>
                    </div>
                </div>
            </li>
            {{-- KONTEN 2 --}}
            {{-- <li class="w-full relative object-cover" style="background-image: url('/img/home.svg'); height: 100vh;">
                <div class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="text-center">
                        <img class="rounded-xl" src="/img/tengah1.svg" alt="">
                        <div class="absolute inset-0 flex flex-col justify-center items-center z-20">
                          <div>
                            <span class="text-white font-bold text-6xl">WELCOME TO<br> WashNJoy</span><br><br>
                            <span class="text-biru_tengah font-bold text-4xl">Simplicity Redefined</span>
                          </div>
                            <div class="mt-14 bg-white w-28 mx-auto py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru-tua">
                              <a class="font-semibold" href="/login">Login</a>
                          </div>
                        </div>
                    </div>
                </div>
            </li> --}}
            {{-- //KONTEN3 3 --}}
            <li class="w-full relative object-cover">
              <img class="w-full object-cover" src="/img/sidebar3.svg">
          </li>
          <li class="w-full relative object-cover">
            <img class="w-full object-cover" src="/img/sidebar4.svg">
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




    {{-- <section class="w-full relative" style="background-image: url('/img/home.svg'); height: 100vh;">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                <img class="rounded-xl" src="/img/tengah1.svg" alt="">
                <div class="absolute inset-0 flex flex-col justify-center">
                  <div>
                    <span class="text-white font-bold text-6xl">WELCOME TO<br> WashNJoy</span><br><br>
                    <span class="text-biru_tengah font-bold text-4xl">Simplicity Redefined</span>
                  </div>
                    <div class="mt-14 bg-white w-28 mx-auto py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru-tua">
                      <button class="font-semibold"><a href="login">Login</a></button>
                  </div>
                </div>
            </div>
        </div>
   </section>  --}}

    <section class="bg-biru_tengah">
        <div class="pt-12 text-center">
            <span class="text-black font-bold text-4xl">LAYANAN KAMI <br></span>
            <span class="text-black text-2xl"> Pilih layanan sesuai kebutuhanmu, dan percayakan kepada kami</span>
     </div>
    <section class="flex justify-between mx-10 gap-10 mt-16 h-auto mb-16">
        <!--Gambar 1-->
      <div class="text-center">
        <div>
      <span class="text-3xl font-bold">Drop Off </span><br><br>
      <span>Siapkan pakaianmu dan
        atur penjmputan.</span>
      </div>
      <div class="mt-10">
        <img src="/img/dropofff.svg" alt="">
      </div>
      </div>
        
      <!--Gambar 2-->
      
      <div>
        <div class="">
          <img src="/img/pickup.svg" alt="">
        </div>
        <div class="text-center mt-10">
        <span class="text-3xl font-bold"> Dry Cleaning</span><br><br>
        <span>Layanan Dry Clean spesial<br>
           pakaian bersih, rapi,
            dan terawat.</span>
      </div>
        </div>
      
       <!--Gambar 3-->
      <div class="text-center">
        <div>
      <span class="text-3xl font-bold"> Wash and Fold</span><br><br>
      <span>Kami membersihkan dan <br>
        melipat pakaian Anda dengan <br>
        cara yang paling profesional.</span>
      </div>
      <div class="mt-10">
        <img src="/img/pickup2.svg" alt="">
      </div>
      </div>
      
      <!--Gambar 4-->
      
      <div>
        <div class="">
          <img src="/img/fastdelivery.svg" alt="">
        </div>
        <div class="text-center mt-10">
        <span class="text-3xl font-bold">Fast Delivery</span><br><br>
        <span>Kami akan mengantarkan<br>
          pakaianmu and enjoy!</span>
      </div>
        </div>
      
      </section>

        <section>
            <section class="bg-biru-tua" style="height: 100vh;">
                <div class="pt-12 px-40 flex">
                   <div><span class="text-white font-bold text-4xl">TENTANG KAMI</span> <br><br><br>
                    <span class="text-white text-xl">Selamat datang di WashNJoy! <br>
                        Kami berkomitmen untuk memberikan <br>
                        layanan laundry terbaik kepada anda. <br> <br>
                        Kami menggunakan teknologi canggih <br>
                        dan bahan pembersih berkualitas <br>
                        untuk memastikan bahwa setiap cucian Anda <br>
                        diolah dengan sempurna. <br><br>
                        Dengan layanan kami yang cepat, andal, <br>
                        dan ramah lingkungan, kami bertekad <br>
                        untuk menjadi sahabat terpercaya Anda <br>
                        dalam menjaga pakaian tetap segar dan bersih <br><br>
                        Lupakan mencuci memakai tangan,<br>
                        simpan cucianmu,dan kurir kami <br>
                        siap mengantar jemput pakaianmu!</span> </div>
             <div class="ml-auto "> <img class="" src="/img/logobesar.svg" alt="" > </div> 
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