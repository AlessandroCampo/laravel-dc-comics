@extends('layouts.main')
@section('title', 'DC Comics|Home')

<?php
$firstComic = $comics->first();
$arr_keys = $firstComic ? array_keys($firstComic->toArray()) : [];
?>

@section('content')
    <div class="d-flex gap-5 align-items-center py-5 justify-content-center">
        <h1 class="text-white text-uppercase"> All comics </h1>
        <a href="{{ route('comics.create') }}" class="btn btn-success mb-1">
            Create new record
        </a>
    </div>

    <table class="table table-dark text-center table-striped">
        <thead>
            <tr>
                <th scope="col">Actions</th>
                @foreach ($arr_keys as $key)
                    <th class={{ $key == 'description' ? 'description' : '' }}>
                        {{ strtoupper($key) }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>

            @foreach ($comics as $comic)
                <tr>
                    <th scope="row" class="">
                        <div class="d-flex flex-column gap-2 justify-content-center w-100">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary ">
                                Show
                            </a>
                            <form
                                action="{{ route('comics.destroy', ['comic' => $comic->id]) }}
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


                    </th>

                    @foreach ($comic->getAttributes() as $key => $value)
                        <td class="{{ $key == 'description' ? 'description' : '' }}">{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
