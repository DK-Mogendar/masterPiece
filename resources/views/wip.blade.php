<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workInProgress</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-image: url('{{ asset('images/hg.jpg') }}');background-size: cover;background-repeat: no-repeat;background-position: center center; min-height:100vh;">
    <br>
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
         <div class="my-div">
            <img src="{{ asset('images/wip.svg') }}" alt="SVG-Bild" style="border-radius: 50px; height: auto; width:100%;">
         </div>

         <div>
            <button type="button" class="btn btn-secondary" style="border-radius: 50px;height: auto; width: 100%;">
               <a href="{{ url('/login') }}" class="btn btn-secondary">login</a>
            </button>
         </div>

        </div>
      </div>
   </div>
   
</body>
</html>
