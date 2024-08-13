<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="bg-biru_muda ">
    <div class="flex justify-center h-screen w-screen items-center">
     <div class="w-full md:w-1/2 flex flex-col items-center " >
        
         <h1 class="text-center text-2xl font-bold text-black mb-6">LOGIN</h1>
         <div class="w-3/4 mb-6">
             <input type="email" name="email" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Username">
         </div>
         <div class="w-3/4 mb-6">
             <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Password">
         </div>

         <div class="w-3/4 mt-4"> 
             <button type="submit" class="py-4 bg-biru-tua w-full rounded text-blue-50 font-bold hover:bg-biru_tengah"><a href="dashboard.html">LOGIN</a></button>
         </div>
         <div>
            <div>
               <span class="">Dont have account?</span> 
                <a href="signin.html" class="text-sm text-slate-600 hover:text-blue-500">Sign Up</a>
            </div>
         </div>
     </div>
    </div>
 </body>