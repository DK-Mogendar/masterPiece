<x-layouts.main>
    <div class="flex-1">
        <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700  text-xs bg-indigo-100 ">
            <h2 class="text-blue text-2xl ">Daniel Köstinger Web Developer Rookie</h2> 
            <div class="bg-indigo-100 shadow rounded"> 
                <br>
                <div class="container bg-indigo-100">     
                    <img src="{{ asset('images/FLogo.svg') }}" alt="svg-Bild">
                </div>
                <br>
            
            </div>  
                <br>
                <div class="rounded-b border-t border-gray-300 p-5 text-gray-700 text-xs bg-indigo-100">
                
                    <h2 class="text-blue text-xl ">Projekt MasterPiece</h2>
                    <br>
                    <p>02.05.2023 - 22.06.2023
                        <br>
                        <h3>Kleine Projektgeschiche</h3>   
                        <br>                   
                        Ganz zu Beginn der Aufgabe, habe ich mich zuerst für einen Webshop entschieden. Daher habe ich zuerst ein Wireframe erstellt um die ungefähre Struktur sowie Aussehen darzustellen.
                        Damit ich mehr Authenzität in das Projekt bringen konnte, habe ich es mehreren Leuten gezeigt und nach Ihrer Meinung gefragt.
                        Leider war die Resonanz nich ganz so gut. Darum habe ich dazu entschieden nochnmals von vorne mit einem komplett neuen Ansatz zu beginnen. Dies kam dann optisch sehr gut an.
                        Anschliessend erstellte ich ein Figma MockUp.
                        <br>
                        Da ich vorhabe mich im Bereich Frontend zu spezialisieren habe ich mich zuerst nochmals mit dem Programm Figma beschäftigt. Diesmal wollte ich es professioneller machen ,so das daraus ein Testdummy der Webseite ensteht, durch den man navigieren kann.
                        Mit dem Ziel, dies potenziellen Kunden zeigen zu können. Dies verschlang Unmengen an Zeit. Als ich dann alles so weit beisammen hatte, bemerkte ich, dass dieses Projekt viel grösser werden würde als gedacht. In Anbetracht der mir noch verbleibenden Zeit (rund 2 1/2 Wochen) nicht mehr umsetzen war. 
                        Daher musste ich eine realisierbare Lösung finden und habe mich dann für einen Kunst-Blog entschieden.
                        <br>
                        So begann ich also mit dem Projekt Mogendar-Art-Blog.
                        Leider hatte ich zeitlich nicht mehr die Resource um nochmals ein Figma von Grund auf zu erstellen. Daher habe ich das Bestehende umgebaut.
                        So begann ich mit der Recherchen zum Thema Blog. Für die bessere Plahnung erstellte ich ein Trello damit die offenen und erledigten Arbeiten besser ersichtlich und verarbeitbar sind.
                        <br>
                        Wie gewohnt ging es am Anfang schnell und gut voran (ist am Anfang immer so).
                        Die grundlegende Struktur erstellte ich mit Laravell mit Breeze.
                        Anschliessend erstellte ich die Work in Progress Seite. In dieser wollte ich ein spezielles SVG ausgeben. Eines welches eine Neuinterpretation eines alten Fernseh-Testbildes zusammen mit meinen Logo darstellen sollte.
                        So wollte ich den Einstieg zur eigentlichen Webseite machen. 
                        So das jeder sieht, dass diese noch im Aufbau ist.
                        So arbeitete ich mich durch die einzelnen Punkte (Nachzulesen im Trello). Angefangen mit der main und index.blade.php. usw. Ich werde nicht alles aufzählen. 
                        Bitte Trello link beachten.
                        Hervorzuheben ist, dass ich eine vielzahl neuer Dinge ausprobiert habe. So zum Beispiel TDD Test Driven Development wodurch ein Blog zuerst ein Testprotokoll durchläuft bevor die Seite ausgegeben wird.
                        Wie auch TailwindCss, und noch einiges was angedacht ist (Weiterbearbeitung nach Abgabe). 
                        <br>
                        Leider wurde mir auch hier klar, dass die Zeit zu kurz sein würde, um alles was ich gerne umsetzen wollte bis zur Abgabe ein zu bringen. So habe ich mich, als sich die Zeit langsam dem Ende zuneigte, nur noch um das Wichtigste und die Funktionalität gekümmert. Damit es zumindest im lokalen Host funktioniert und gut aussieht.
                        <br>
                        #Retrospektieve: Projekt "MasterPiece"
                                               
                        Was ich besonders gut an dieser Aufgabe gefunden habe, ist, dass ich nun einen viel besseren Einblick und besseres Verständnis für die Funktionalitäten von Figma und Laravell mit Breez und TailwindCss erlangt habe. 
                        Nun bin ich in der Lage bin mit Trello (noch nicht perfekt) einen brauchbaren Präsentations-Entwurf zu erstellen. So kann ich meine zukünftigen Projekte richtig präsentieren wie auch strukturell nutzen.
                        Zudem habe ich viel über Projektmanagement gelernt. Gute Planung ist die halbe Arbeit. Man sollte sich im Vorfeld allgemeine Gedanken über die Projekstruktur, den Aufwand sowie die Machbarkeit(Zeit) wie auch Umsetzbarkeit machen. Natürlich zu den normalen Recherchen.
                        <br>
                        Das war ein kleiner Einblick in dieses Projekt.
                        <br>
                        <br>
                        Daniel Köstinger
                    </p>
                    
                    <br>
                    <br>
                    <img src="{{ asset('images/UAvQ.gif') }}" alt="gis-Bild-tukamock" style="border-radius: 50px; height: auto; width: 100%;border: 3px solid rgb(54, 42, 165) ;">
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
        
    </div>
    
  
    
</x-layouts.main>