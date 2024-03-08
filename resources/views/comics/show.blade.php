@extends('layouts.main')

@section('main-content')
    <section id="show">
        <header class="section-header">
            <div class="container">

                <div class="prod-card">
                    <div class="top-label">Comic book</div>
                    <figure>
                        <img src="{{ $comic['thumb'] }}" :alt="comic cover">
                    </figure>
                    <div class="bottom-label">view gallery</div>
                </div>
            </div>
        </header>
        <div class="container">
            <h2><?= $comic['title'] ?></h2>

        </div>
    </section>
@endsection
