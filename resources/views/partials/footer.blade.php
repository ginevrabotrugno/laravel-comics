@php
    $dc_comics = config('menues.footer_menu.dc_comics.items');
    $dc_comics_title = config('menues.footer_menu.dc_comics.title');

    $shop = config('menues.footer_menu.shop.items');
    $shop_title = config('menues.footer_menu.shop.title');

    $dc = config('menues.footer_menu.dc.items');
    $dc_title = config('menues.footer_menu.dc.title');

    $sites = config('menues.footer_menu.sites.items');
    $sites_title = config('menues.footer_menu.sites.title');

@endphp

<footer>
    <section class="links">
        <div class="container">

            <ul>
                <li>
                    <h3>
                        {{ $dc_comics_title }}
                    </h3>
                    <ul>
                        @foreach ( $dc_comics as $link )

                        <li><a href="#"> {{ $link['text'] }} </a></li>

                        @endforeach
                    </ul>
                </li>
                <li>
                    <h3>
                        {{ $shop_title }}
                    </h3>
                    <ul>
                        @foreach ( $shop as $link )

                        <li><a href="#"> {{ $link['text'] }} </a></li>

                        @endforeach
                    </ul>
                </li>
                <li>
                    <h3>
                        {{ $dc_title }}
                    </h3>
                    <ul>
                        @foreach ( $dc as $link )

                        <li><a href="#"> {{ $link['text'] }} </a></li>

                        @endforeach
                    </ul>
                </li>
                <li>
                    <h3>
                        {{ $sites_title }}
                    </h3>
                    <ul>
                        @foreach ( $sites as $link )

                        <li><a href="#"> {{ $link['text'] }} </a></li>

                        @endforeach
                    </ul>
                </li>
            </ul>

        </div>
    </section>
    <section class="sign-up">
        <div class="container">

            <a href="#" class="button_footer">
                SIGN-UP NOW!
            </a>

            <nav>
                <ul>
                    <li class="follow">FOLLOW US</li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="logo">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

</footer>
