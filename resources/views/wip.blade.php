<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-image: url('{{ asset('images/hg.jpg') }}');">
    
   <div class="svg container col-6 mt-5">
      <img src="{{ asset('images/wip.svg') }}" alt="SVG-Bild" style="width:1000px; justify-content: center; border-radius: 50px;">
     
     <button type="button" class="btn btn-secondary" style="width:1000px; justify-content: center;border-radius: 50px;">
        <a href="{{ url('/login') }}" class="btn btn-secondary">Link</a>
     </button>
   </div>
</body>
</html>
