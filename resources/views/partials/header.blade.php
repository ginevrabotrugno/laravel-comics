<header>
    <div class="container">
        <a href=" {{ route('home') }} " class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </a>

        <nav>
            <ul>
                <li><a href=" {{ route('about') }} ">ABOUT</a></li>
                <li><a href=" {{ route('contact') }} ">CONTACT</a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">COLLECTIBLES</a></li>
                <li><a href="#">VIDEOS</a></li>
                <li><a href="#">FANS</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
        </nav>

    </div>
    <div class="jumbotron">
        <div class="container">
            <a href="#" class="button">
                CURRENT SERIES
            </a>
        </div>
    </div>
</header>
