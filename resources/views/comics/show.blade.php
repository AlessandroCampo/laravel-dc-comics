@extends('layouts.main')
@section('title', 'DC Comics|Home')



@section('content')
    <div class="my-container justify-content-center">
        <div class="card w-50">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <p class="card-text"><span class="fw-bold text-uppercase ">price:</span> {{ $comic->price }}</p>
                <p class="card-text"><span class="fw-bold text-uppercase">series:</span> {{ $comic->series }}</p>
                <p class="card-text"><span class="fw-bold text-uppercase">sale date:</span> {{ $comic->sale_date }}</p>
                <a href="/" class="btn btn-primary">Back to index</a>
            </div>
        </div>
    </div>

@endsection
