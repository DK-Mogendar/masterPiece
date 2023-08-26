<x-layouts.main>


 
 
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 mt-3 mb-3">

            <div class="my-div d-flex justify-content-center ma-5">
               <img src="{{ asset('images/wip.svg') }}" alt="SVG-Bild" style="border-radius: 50px; height: auto; border: 5px solid rgb(71, 69, 69);">
            </div>
            <div class="my-div d-flex justify-content-center ma-5">
               <div class="my-div d-flex justify-content-center rounded-b border-t border-gray-300 p-5 text-gray-700 text-xs bg-indigo-100" style="border-radius: 50px; height: auto;border: 5px solid rgb(71, 69, 69);">
                     <br>
                     <ul>   
                        <li class="text-blue text-3xl">Willkommen bei Mogendar-Art.ch     Wo sich Kunst und Kontroversen treffen!</li>
                        <br>
                        <li class="text-blue text-2xl">Kunstwerke und Artikel, die bewusst Tabus brechen, Fragen aufwerfen und zu Diskussionen anregen</li>
                        <br>
                        <!--<li class="text-blue text-xl">🎨Artikel und Werke, die bewusst Tabus brechen, Fragen aufwerfen und zur Diskussionen anregen.🎨</li>
                        <br>
                        <li class="text-blue text-xl">⚠️ Bereite dich vor - die Kontroverse beginnt bald! ⚠️</li>
                        <br>
                        <li class="text-blue text-xl">✨Lass die Kunst deine Sinne beflügeln - wir sehen uns auf Mogendar-Art.ch!✨</li>-->
                                        
                  </ul>
               </div>
            </div>

            <div class="my-div d-flex justify-content-center text-blue text-2xl">
               <button type="button" class="btn btn bg-indigo-100" style="width: 100%; border-radius: 50px; height: auto;border: 5px solid rgb(71, 69, 69);">
                  <a href="{{ url('start') }}" class="btn btn-secondary" style="height: auto; width: 100%;border-radius: 50px;">Weiter zu den Blogs</a>
               </button>
            </div>
      
        </div>
      </div>
   </div>

   <br>
</body>

</x-layouts.main>
