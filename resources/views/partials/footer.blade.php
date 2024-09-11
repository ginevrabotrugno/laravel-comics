@php
    // $dc_comics = config('menues.footer_menu.dc_comics');
    // // $dc_comics_title = config('menues.footer_menu.dc_comics.title');

    // $shop = config('menues.footer_menu.shop');
    // // $shop_title = config('menues.footer_menu.shop.title');

    // $dc = config('menues.footer_menu.dc.items');
    // $dc_title = config('menues.footer_menu.dc.title');

    // $sites = config('menues.footer_menu.sites.items');
    // $sites_title = config('menues.footer_menu.sites.title');

    $footer_menues = config('menues.footer_menu');

    // dd(config('menues.footer_menu'));

@endphp

<footer>
    <section class="links">
        <div class="container">

            <ul>
                @foreach ( $footer_menues as $footer_menu )
                <li>
                    <h3>
                        {{ $footer_menu['title'] }}
                    </h3>
                    <ul>
                        @foreach ( $footer_menu['items'] as $link )

                        <li><a href="#"> {{ $link['text'] }} </a></li>

                        @endforeach
                    </ul>
                </li>

                @endforeach
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
