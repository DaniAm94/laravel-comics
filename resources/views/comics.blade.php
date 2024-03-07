@extends('layouts.main')

@section('main-content')
    <section id="products">
        <div class="container">
            <h2>Current Series</h2>
            <div class="card-container">
                @each('product.card', config('comics'), 'comic')
            </div>
            <button role="button" id="load-btn">Load More</button>
        </div>
    </section>
@endsection
