<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="bg-biru_muda ">
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
    <div class="flex justify-center h-screen w-screen items-center">
     <div class="w-full md:w-1/2 flex flex-col items-center " >
        
         <h1 class="text-center text-2xl font-bold text-black mb-6">ADMIN LOGIN</h1>
         <div class="w-3/4 mb-6">
             <input type="email" name="email" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Username">
         </div>
         <div class="w-3/4 mb-6">
             <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Password">
         </div>

         <div class="w-3/4 mt-4"> 
             <button type="submit" class="py-4 bg-biru-tua w-full rounded text-blue-50 font-bold hover:bg-biru_tengah">LOGIN</button>
         </div>
         <div>
            <div>
            </form>
               
            </div>
         </div>
     </div>
    </div>
 </body>