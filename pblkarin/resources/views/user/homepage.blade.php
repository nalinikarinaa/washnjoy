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
            <li class="w-full relative object-cover" style="background-image: url('/img/home.svg'); height: 100vh;">
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
            </li>
            {{-- //KONTEN3 3 --}}
            <li class="w-full relative object-cover">
              <img class="w-full object-cover" src="/img/sidebar3.svg">
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
      <span class="text-3xl font-bold">Drop Off</span><br><br>
      <span> Siapkan pakaianmu dan atur penjemputan.</span>
      </div>
      <div class="mt-10">
        <img src="/img/dropofff.svg" alt="">
      </div>
      </div>
      
      <!--Gambar 2-->
      
      <div>
        <div class="">
          <img src="/img/selfservice.svg" alt="">
        </div>
        <div class="text-center mt-10">
        <span class="text-3xl font-bold">Pick up and Delivery 
            for Dry Cleaning</span><br><br>
        <span>Special dry cleaning
            for special clothes.</span>
      </div>
        </div>
      
       <!--Gambar 3-->
      <div class="text-center">
        <div>
      <span class="text-3xl font-bold">Pick up and Delivery 
        for Wash and Fold</span><br><br>
      <span>We clean and fold your
        in the most professional way.</span>
      </div>
      <div class="mt-10">
        <img src="/img/pickup2.svg" alt="">
      </div>
      </div>
      
      <!--Gambar 4-->
      
      <div>
        <div class="">
          <img src="/img/pickup.svg" alt="">
        </div>
        <div class="text-center mt-10">
        <span class="text-3xl font-bold">Self - Service</span><br><br>
        <span>Do you want to do it yourself? No problem, bring your clothes.</span>
      </div>
        </div>
      
      </section>

        <section>
            <section class="bg-biru-tua" style="height: 90vh;">
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
        

        <section class="bg-biru_muda h-auto">
            <div class="pt-12 text-center">
            <span class="text-black font-bold text-4xl">TEMUKAN KAMI <br></span>
           </div>

          <div class="flex">
           <div class="">
           <div class="flex items-center  py-10 px-52">
              <img class="mr-5" src="/img/lokasi.svg" alt="">
              <span class="font-bold text-xl"> Jl. Veteran Malang Indonesia</span> <br>
          </div>
          <div class="flex items-center px-52 ">
              <img class="mr-5" src="/img/teleponn.svg" alt="">
              <span class="font-bold text-xl"> 082-447-746-899</span>
          </div>
          <div class="flex items-center py-10 px-52">
              <img class="mr-5" src="/img/pesan.svg" alt="">
              <span class="font-bold text-xl"> WashNJoy@gmail.com</span> 
          </div> 
        </div>
          <div class=""> 
            <img class="" src="/img/paket.svg" alt="" > 
          </div> 
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