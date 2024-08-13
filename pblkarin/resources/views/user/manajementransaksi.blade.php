<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Transaksi</title>
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

        <section class="w-full relative" style="background-image: url('/img/bgmantransaksi.svg'); height: 70vh;">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <img class="rounded-xl" src="/img/tengah2.svg" alt="">
                    <div class="absolute inset-0 flex flex-col justify-center">
                      <div>
                        <span class="text-biru_tengah font-bold text-4xl">MANAJEMEN TRANSAKSI</span>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-biru_muda h-auto py-20">
                    <div class="mt-14 ml-auto mr-10 bg-white w-40 items-end py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru-tua">
                        <a href="{{route('show.transaksi')}}" class="font-bold">+ Tambah transaksi</a>
                </div>

                @foreach($items as $transaksi)
    <div class="bg-biru-tua mx-60 h-auto mt-12 justify-center rounded-xl">
        <div class="bg-biru_tengah py-10 h-auto mt-12 translate-y-10 rounded-xl justify-center">
            <ul class="list-disc text-black font-bold px-10 py-4">
                <li>Nama paket: {{ $transaksi->jenispaket }}</li>
                <li>Berat: {{$transaksi->berat}} Kg </li>
                <li>Tanggal terima: {{ $transaksi->tanggalordermasuk }}</li>
                <li>Tanggal selesai: {{ $transaksi->tanggalorderkeluar }}</li>
                <li>Total bayar: Rp. {{ $transaksi->harga }},00</li>
               

            </ul>
            <div class="flex text-center items-center ml-auto justify-end space-x-4 mt-8 mx-4">

            @if ($transaksi->pengiriman == "PENGAMBILAN")
                <a href="{{ url('', ['transaksi' => $transaksi->pengiriman, 'status' => 'PENGAMBILAN']) }}" 
                    class="bg-kuning w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda text-white text-center">
                    PENGAMBILAN
                </a>
            @elseif ($transaksi->pengiriman == "PROSES")
                <a href="{{ url('', ['transaksi' => $transaksi->pengiriman, 'status' => 'PROSES']) }}" 
                    class="bg-hijau w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda text-white text-center">
                    PROSES
                </a>
            @elseif ($transaksi->pengiriman == "PENGANTARAN")
                <a href="{{ url('', ['transaksi' => $transaksi->pengiriman, 'status' => 'PENGANTARAN']) }}" 
                    class="bg-kuning w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda text-white text-center">
                    PENGANTARAN
                </a>
                @elseif ($transaksi->pengiriman == "DITERIMA")
                <a href="{{ url('', ['transaksi' => $transaksi->pengiriman, 'status' => 'DITERIMA']) }}" 
                    class="bg-biru-tua w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda text-white text-center">
                    DITERIMA
                </a>
            @endif
            

                @if ($transaksi->status == "LUNASI")
                    <a href="{{ route('show.pembayaran', ['id' => $transaksi->id, 'status' => 'LUNASI']) }}" 
                        class="bg-merah w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda text-white text-center">
                        LUNASI
                    </a>
                @elseif ($transaksi->status == "LUNAS")
                    <a href="{{ url('', ['transaksi' => $transaksi->status, 'status' => '']) }}" 
                        class="bg-biru-tua w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda text-white text-center">
                        LUNAS
                    </a>
                @endif

                <form action="{{ route('show.manajementransaksidestroy', $transaksi->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-white w-40 py-3 rounded-lg hover:bg-biru_tengah border-2 border-biru_muda text-center font-bold">Hapus</button>
                    @include('sweetalert::alert')
                </form>
            </div>
        </div>
    </div>
@endforeach

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