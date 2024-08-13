
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <section>
        <nav class="bg-biru_tengah py-5 px-8 flex items-center "> 
        <span class="text-biru-tua font-bold text-3xl">WashNJoy</span>
        <div class="justify-between gap-30 ml-auto">
            <a class="py-3 px-4 text-biru-tua" href="dashboard">Dashboard</a>
            <a class="py-3 px-4 text-biru-tua" href="daftarpaket">Daftar Paket</a>
            <a class="py-3 px-4 text-biru-tua" href="tambahtransaksi">Tambah Transaksi</a>
            <a class="py-3 px-4 text-biru-tua" href="manajementransaksi">Manajemen Transaksi</a>
            <a class="py-3 px-4 text-white" href="profil">Profil</a>
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

        <section class="bg-white h-auto py-20">
        
            <div class="bg-biru_tengah max-w-xl mt-5 py-8 mx-auto items-center justify-center rounded-xl " style="height: 130vh;">
                <div class="justify-center mx-auto"><img class="mx-auto" src="/img/profil.svg" alt=""></div>
        <form method="post" action="{{ route('profile.update')}}" class="mt-6 space-y-6">
            @csrf
            @method('patch')
                <div class=" ml-20">
                    <p>Nama</p>
                    <input type="text" name="name" value="{{ Auth::user()->name}}" class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">
                </div>
                <div class="mt-2 ml-20">
                    <p>Email</p>
                    <input type="email" name="email" value="{{ Auth::user()->email}}" class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4">
                </div>
                <div class="mt-8 ml-20 bg-biru-tua w-32 py-3 rounded-lg hover:bg-biru_muda   border-2 border-biru-tua items-center text-center">
                        <button type="submit" class="font-bold text-center">Simpan</button>
                    </div>
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Your email address is unverified.') }}
    
                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>
    
                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
                </form>


                <form method="post" action="{{ route('password.update')}}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
                <div class="mt-14 ml-20">
                    <p>Current Password</p>
                    <input type="password" name="current_password" class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4" placeholder="Password">
                </div>
                <div class="mt-2 ml-20">
                    <p>New Password</p>
                    <input type="password" name="password" class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4" placeholder="Password">
                </div>
                <div class="mt-2 ml-20">
                    <p>Confirm Password</p>
                    <input type="password" name="password_confirmation" class="mt-2 w-96 rounded-xl bg-biru_muda border-2 border-biru-tua py-3 px-4" placeholder="Confirm Password">
                </div>

                <div class="flex justify-between mx-20">
                    <div class="mt-8 bg-biru-tua w-32 py-3 rounded-lg hover:bg-biru_muda   border-2 border-biru-tua items-center text-center">
                        <button type="submit" class="font-bold text-center">Simpan</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <div class="mt-8 bg-merah w-32 py-3 rounded-lg hover:bg-biru_muda   border-2 border-merah items-center text-center">
                    <button type="submit" class="font-bold text-center">Logout</button>
                </div>
            </form>
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