<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="images/ico">
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container">

            <figure><img src="{{ asset('images/dc-logo.png') }}" alt="DC logo"></figure>
            <nav>
                <ul>
                    <li>
                        <a href="#">

                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <footer>
        <div class="footer-top">
            <div class="container">

                <nav class="links-container">
                    <div class="links-list">
                    </div>
                </nav>
                <figure>
                    <img src="{{ asset('images/dc-logo-bg.png') }}" alt="big dc logo">
                </figure>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <a href="#" id="register-btn">Sign-Up now!</a>
                <nav>
                    <ul>
                        <li>
                            <h3>Follow us</h3>
                        </li>
                        <li>
                            <a href="#">
                                <img :src="" :alt="icon.text">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>
