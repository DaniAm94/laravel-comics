<div class="prod-card">
    <a href="{{ route('comic') }}">
        <figure>
            <img src="{{ $comic['thumb'] }}" :alt="comic cover">
        </figure>
        <span>{{ $comic['series'] }}</span>
    </a>
</div>
