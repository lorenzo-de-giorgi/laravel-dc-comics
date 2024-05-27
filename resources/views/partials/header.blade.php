<header class="container">
    <div id="dc-logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
    </div>
    <nav>
        <ul>
            <li><a href="{{route('home')}}">Homepage</a></li>
            <li><a href="{{route('comics.index')}}">Comics</a></li>
        </ul>
    </nav>
</header>