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
   <x-layouts.header-backend/>
   <br>
   <br>
   <br>
 
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 mt-3 mb-3">
         <div class="my-div d-flex justify-content-center ma-5">
            <img src="{{ asset('images/wip.svg') }}" alt="SVG-Bild" style="border-radius: 50px; height: auto; width:55%; border: 25px solid brown;">
         </div>

         <div class="my-div d-flex justify-content-center">
            <button type="button" class="btn btn" style="border-radius: 50px; height: auto; width: 55%;border: 25px solid brown;">
               <a href="{{ url('start') }}" class="btn btn-secondary" style="height: auto; width: 100%;border-radius: 50px;">Weiter zur Webseite</a>
            </button>
         </div>
      
        </div>
      </div>
   </div>
   <x-layouts.footer-backend/>
   <br>
   <br>
   <br>
</body>

</html>
