<footer>
    <section class="content">
        <nav class="footer-logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" class="main-logo" alt="">
        </nav>
        <nav class="footer-links">
            <h2>
                DC Comics
            </h2>
            <ul>
                <li>
                    <a href="/dccomics">
                        @foreach ($navbarDcComics as $element)
                            {{$element['name']}}
                        @endforeach
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="footer-links">
            <h2>
                Shop
            </h2>
            <ul>
                <li>
                    <a href="/shop">
                        @foreach ($navbarShop as $element)
                            {{$element['name']}}
                        @endforeach
                    </a>
                </li>
            </ul>
        </nav>
        <nav>
            <h2>
                DC
            </h2>
            <ul>
                <li>
                    <a href="/dc">
                        @foreach ($navbarDc as $element)
                            {{$element['name']}}
                        @endforeach
                    </a>
                </li>
            </ul>
        </nav>
        <nav>
            <h2>
                Sites
            </h2>
            <ul>
                <li>
                    <a href="/sites">
                        @foreach ($navbarSites as $element)
                            {{$element['name']}}
                        @endforeach
                    </a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="button">
        <button>
            Sign-up now!
        </button>
    </section>
    <section class="navbar">
        <h2>
            Follow us
        </h2>
        <div>
            <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
        </div>
    </section>
</footer>
