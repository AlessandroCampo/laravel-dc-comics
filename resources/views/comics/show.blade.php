@extends('layouts.main')
@section('title', 'DC Comics|Home')



@section('content')
    <div class="my-container justify-content-center">
        <div class="card w-50 p-5  bg-secondary-subtle">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column gap-3 align-items-start">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <p class="card-text"><span class="fw-bold text-uppercase ">price:</span> {{ $comic->price }}</p>
                <p class="card-text"><span class="fw-bold text-uppercase">series:</span> {{ $comic->series }}</p>
                <p class="card-text"><span class="fw-bold text-uppercase">sale date:</span> {{ $comic->sale_date }}</p>
                <div class="d-flex gap-3">
                    <a href="/" class="btn btn-primary">Back to index</a>
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}
                                "
                        method="POST">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-danger "> Delete </button>
                    </form>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">
                        Edit
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection
