<!DOCTYPE html>
 <html lang="id">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 </head>
 <body class="bg-gray-100 h-screen flex justify-center items-center">

     <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
         <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>

         @if ($errors->any())
             <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif

         <form method="POST" action="{{ route('login') }}">
             @csrf

             <div class="mb-4">
                 <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                 <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
             </div>

             <div class="mb-6">
                 <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                 <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
             </div>

             <div class="flex items-center justify-between">
                 <button class="gradient-button text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                     Login
                 </button>
                 <a class="inline-block align-baseline font-bold text-sm text-indigo-500 hover:text-indigo-800" href="{{ route('register') }}">
                     Belum punya akun? Daftar
                 </a>
             </div>
         </form>
     </div>

 </body>
 </html>