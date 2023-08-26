<header class="bg-white-25 border-t-4 border-blue-700 shadow mb-5 width: 100%;">   
    <nav class="container mx-auto px-5 lg:px-40 py-5 flex justify-between text-xl width: 100%;">
        <ul class="flex space-x-5">
            <a href="{{ url('/') }}" class="font-bold mr-5 text-blue-700">Mogendar-Art-Blog</a>
            <li><a href="{{ url('start') }}" class="btn btn-secondary font-bold mr-5 text-blue-700" style="height: auto; width: 100%;border-radius: 50px;">Home/Start</a></li>
            <!--<li><a href="{{ url('welcome') }}" class="btn btn-secondary" style="height: auto; width: 100%;border-radius: 50px;">Archiv Laravel</a></li>-->
            <li><a href="{{ url('test') }}" class="btn btn-secondary font-bold mr-5 text-blue-700" style="height: auto; width: 100%;border-radius: 50px;">News</a></li>
            <li><a href="{{ url('aboutMy') }}" class="btn btn-secondary font-bold mr-5 text-blue-700" style="height: auto; width: 100%;border-radius: 50px;">About me</a></li>
            <li><a href="{{ url('welcome') }}" class="btn btn-secondary font-bold mr-5 text-blue-700" style="height: auto; width: 100%;border-radius: 50px;">Quellen</a></li>
        </ul>

        <ul>
            <li><a href="/register" class="font-bold mr-5 text-blue-700">Register</a></li>
        </ul>
        <ul>
            <li><a href="/login" class="font-bold mr-5 text-blue-700">Login</a></li>
        </ul>
    </nav>
</header>