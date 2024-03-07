<section id="navigation">
    <div class="container">
        <nav>
            <ul>
                @foreach (config('nav') as $item)
                    <li>
                        <a href="#">
                            <img class="icon" src="{{ asset('images') . '/' . $item['img'] }}" :alt="link.text">
                            {{ $item['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>
