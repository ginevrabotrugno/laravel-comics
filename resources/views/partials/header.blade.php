@php
    $main_menu = config('menues.header_menu');
@endphp


<header>
    <div class="container">
        <a href=" {{ route('home') }} " class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </a>

        <nav>
            <ul>
                @foreach ( $main_menu as $item )

                <li class="{{Route::currentRouteName() === $item['name'] ? 'active' : ''}}"><a href=" {{ route( $item['name'] ) }} "> {{ $item['text'] }} </a></li>

                @endforeach
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
