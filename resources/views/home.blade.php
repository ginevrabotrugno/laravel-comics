{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<section class="content">
    <div class="container">
        <div class="row">

            @foreach ( $cards as $card )

            <div class="card">

                <div class="thumb">
                    <img src=" {{ $card['thumb'] }} " alt="{{ $card['title'] }}">
                </div>
                <h6> {{ $card['title'] }} </h6>

            </div>

            @endforeach


        </div>

        <a href="#" class="button">
            LOAD MORE
        </a>
    </div>
</section>

@endsection


@section('title')
    HOME
@endsection
