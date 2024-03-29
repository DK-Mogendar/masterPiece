<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Mogendar-Art-Blog</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!--Tailwind- plus JavaScript-Einbindung-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
   <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        @media (max-width: 768px) {
        /* Styles für kleinere Bildschirme (Tablets und Handys) */
        body {
            background-size: auto; /* Anstatt "cover" für bessere Darstellung auf kleinen Bildschirmen */
        }

        .container {
            padding: 0 20px; /* Beispielhafte Anpassung des Seiteninhalts */
        }

        /* Weitere Anpassungen für kleine Bildschirme hier */
        }
    </style>
    
</head>
<body style="background-image: url('{{ asset('images/hg.jpg') }}');background-size: cover;background-repeat: no-repeat;background-position: center center; min-height:100vh;"
      class="bg-gray-100 min-h-screen flex flex-col">

      @if (!Route::is('admin*'))
        <x-layouts.header/>
      @else 
        <x-layouts.header-backend/>
      @endif
      


      <div class="shadow rounded-sm mb-5" style="background-color:rgb(54, 42, 165, 0.7);">
        <h2 class="text-black" style="color: rgb(54, 42, 165, 0.0);">.</h2>
      </div>




<main class="flex flex-1 container max-w-7xl mx-auto px-5 lg:px-40 space-x-5 mb-5">
    {{ $slot }}
{{-- 2. Spalte ----------------------------------------------------------------------------------}}
    <div class="space-y-5" style="width:300px;">

        @if (!Route::is('admin*'))
            
            {{--<div class="bg-blue-700 shadow rounded-sm">
            <h2 class="text-white text-2xl p-5">Newsletter</h2>
                <div class="border-t border-blue-600 text-white p-5 text-sm">
                    Sie müssen Registriert sein um Newsletter zu erhalten.
                    <div class="flex mt-5">
                        <input type="text" name="newsletter" class="rounded-l-sm text-gray-800 px-4 py-2 h-12" placeholder="E-Mail Adresse" style="min-width: 0px;">
                        <button type="button" class="bg-blue-800 h-12 text-xs px-4 py-2 rounded-r-sm">abonnieren</button>
                    </div>
                </div>
            </div>--}
        
         

            {{--<x-post.categories/>--}}

            <div class=" shadow rounded-sm" style="background-color:rgb(54, 42, 165, 0.8);">
                <h2 class="text-white text-2xl p-5">Blogs die akuellsten 10</h2>
            </div>
            <x-post.newest/>
            <div class=" shadow rounded-sm" style="background-color:rgb(54, 42, 165, 0.8);">
                <h2 class="text-white text-2xl p-5">Kunst Seiten Inspiration</h2>
            </div>
            <x-post.trending/>
            <br>
            <br>
      

        @endif
    
    </div>
</main>
<br>
<br>
<x-layouts.footer/>



</body>
</html>