

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email verifikasi</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="bg-biru_tengah h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md mx-auto text-center h-auto">
        <img src="/img/logodbadmin.svg" alt="" class="mx-auto mb-6 w-24 ">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Terima Kasih telah Mendaftar!</h1>
        <p class="text-gray-600 mb-6">Kami telah mengirimkan email konfirmasi ke alamat email Anda. Harap periksa email Anda untuk menyelesaikan proses pendaftaran.</p>
        <p class="text-gray-600 mb-6">Jika Anda tidak melihat email dalam beberapa menit, periksa folder spam atau junk email Anda.</p>


        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-merah">
            <p> Email verifikasi Anda telah berhasil dikirim ulang. <br>
                Silakan periksa kotak masuk email Anda <br>
                dan ikuti petunjuk yang diberikan untuk menyelesaikan proses verifikasi akun Anda. <br>
                Jika Anda tidak menemukan email tersebut di kotak masuk, 
                <br>harap periksa juga folder spam atau folder lainnya.</p>
        </div>
    @endif
        <div class="flex justify-center mr-auto ml-auto">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
        <button class="bg-biru-tua text-white py-2 px-4 mr-5 rounded-lg hover:bg-biru_muda transition duration-300">
            Resend verifikasi email
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-merah text-white py-2 px-4 rounded-lg hover:bg-biru_muda transition duration-300">
            LOGOUT
        </button>
    </form>
        </div>
    </div>
</body>
</html>
