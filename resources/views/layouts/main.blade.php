<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mogendar-Art-Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.4/tailwind.min.css" integrity="sha512-paVHVRRhdoOu1nOXKnqDC1Vka0nh7FAmU3nsM4n2FKxOQTeF6crMdMfkVvEsuaOXZ6oEAVL5+wLbQcule/Xdag==" crossorigin="anonymous" />    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<header class="bg-white border-t-4 border-blue-600 shadow mb-5">
    <nav class="container max-w-7xl mx-auto px-5 lg:px-40 py-5 flex justify-between">
        <ul class="flex space-x-5">
            <li class="font-bold mr-5 text-blue-600">Mogendar-Art-Blog</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Archiv</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Impressum</a></li>
        </ul>
        <ul>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>
</header>

<main class="flex flex-1 container max-w-7xl mx-auto px-5 lg:px-40 space-x-5 mb-5">
    @yield('contend')
</main>

<footer class="bg-blue-800 text-white p-5">
    <div class="container max-w-7xl mx-auto px-5 lg:px-40 ">
        <ul class="flex space-x-5">
            <li><a href="#">Home</a></li>
            <li><a href="#">Archiv</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Impressum</a></li>
        </ul>
    </div>
</footer>

</body>
</html>