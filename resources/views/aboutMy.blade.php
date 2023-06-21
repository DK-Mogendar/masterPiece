<x-layouts.main>
   
    <div class="flex-1">
        
       
        <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700  text-xs bg-indigo-100">
            <h2 class="text-blue text-2xl ">Daniel Köstinger<br>Web Developer Rookie</h2> 
            <div class="bg-indigo-100 shadow rounded"> 
                <br>
                <div class="container bg-indigo-100">     
                    <img src="{{ asset('images/123.jpg') }}" alt="Passfoto"  style="width: 40%; display: block; margin: 0 auto; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);">
                </div>
                <br>
                <div class="rounded-b border-t border-gray-300 p-5 text-gray-700 text-xs bg-indigo-100">
                    <h2 class="text-blue text-xl ">Persönlich</h2> 
                    <p>Geboren am 19 September 1977</p>
                    <p>daniel.koestinger@hotmail.com</p>
                    <p>076 574 33 08</p>
                    <p>Hanfrose 6, 8055 Zürich</p>
                    <br>
                    <a href="https://www.linkedin.com/in/daniel-k%C3%B6stinger-6a72b9256/" target="_blank">https://www.linkedin.com/in/daniel-k%C3%B6stinger-6a72b9256/</a>
                </div>  
                <br>
                <div class="rounded-b border-t border-gray-300 p-5 text-gray-700 text-xs bg-indigo-100">
                    <h2 class="text-blue text-xl ">Opportunity-Zertifikat (2023)</h2> 

	                <p>Behandelte Applikationen und Programme</p>
                    <p>◦ Html, CSS, JavaScript</p>
                    <p>◦ GitHub, Figma, Trello, Miro</p>
                    <p>◦ WordPress, VueJs, Laravell</p>
                    <p>◦ Sass, Scss</p>
                    <p>◦ phpMyAdmin, MySQL, Heidi SQL</p>
                    <p>◦ Docker</p>
                    <br>
                    <br>
                    <h2 class="text-blue text-xl ">ICT</h2>
                    <p>MS Excel: gute Kenntnisse</p>
                    <p>MS Word gute Kenntnisse</p>
                    <p>MS Access : Grundkenntnisse</p>
                    <br>
                    <br>
                    <p>Sprachen: Deutsch: Muttersprache</p>
                    <p>Englisch: Grundkenntnisse</p>
                    <p>Französische: Vorkenntnisse</p>
                </div>
            </div>
        </div>
        <div class="my-div d-flex justify-content-center bg-indigo-100 mb-5">
            <button type="button" class="btn btn mb-3 ml-3" style="border-radius: 50px; height: auto; width: 55%;border: 3px solid rgb(54, 42, 165);">
               <a href="{{ url('start') }}" class="btn btn-secondary" style="height: auto; width: 100%;border-radius: 50px;">back</a>
            </button>
        </div>
        <br>
        <br>
    </div>
    
    
</x-layouts.main>