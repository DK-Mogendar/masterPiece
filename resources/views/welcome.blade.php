<x-layouts.main>

<body style="background-image: url('{{ asset('images/hg.jpg') }}');background-size: cover;background-repeat: no-repeat;background-position: center center; min-height:100vh;">
    <br>
   <div class="container">
      <div class="row justify-content-center ">
        <div class="col-12 mt-3 mb-3">
            <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700  text-xl bg-indigo-100">
                <h1>Quellennachweise der einzelnen Blogs</h1>
            </div>

            <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700  text-xs bg-indigo-100 ">
                <ul>   
                    <li><a href="*">AI vs ART Quelle 1.</a></li>
                    <li><a href="*">Klimakleber im Museum Quelle 1.</a></li>
                    <li><a href="*">Hype um NTFS Quelle 1.</a></li>
                    <li><a href="*">reseve </a></li>
                    <li><a href="*">Grenzen der Kunst  Quelle 1.</a></li>
                    <li><a href="*">Feuerwerk Kunstform oder Umweltverschmuzung  Quelle 1.</a></li>
                 
                </ul>
            </div>

            <div class="my-div d-flex justify-content-center bg-indigo-100 mb-5">
                <button type="button" class="btn btn mb-3 ml-3" style="border-radius: 50px; height: auto; width: 55%;border: 3px solid rgb(54, 42, 165);">
                   <a href="{{ url('start') }}" class="btn btn-secondary" style="height: auto; width: 100%;border-radius: 50px;">back</a>
                </button>
            </div>
        </div>
      </div>
   </div>
   
</body>

</x-layouts.main>
