<header>
    <div class="container">

        <a class="header-logo" href="{{ route('home') }}">
            <figure><img src="{{ asset('images/dc-logo.png') }}" alt="DC logo"></figure>
        </a>
        <nav>
            <ul>
                <li>
                    <a class="{{ Route::is('characters') ? 'active' : '' }}"
                        href="{{ route('characters') }}">CHARACTERS</a>
                </li>
                <li>
                    <a class="{{ Route::is('comics') ? 'active' : '' }}" href="{{ route('comics') }}">COMICS</a>
                </li>
                <li>
                    <a class="{{ Route::is('movies') ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">GAMES</a>
                </li>
                <li>
                    <a href="#">COLLECTIBLES</a>
                </li>
                <li>
                    <a href="#">VIDEOS</a>
                </li>
                <li>
                    <a href="#">FANS</a>
                </li>
                <li>
                    <a href="#">NEWS</a>
                </li>
                <li>
                    <a href="#">SHOP</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
