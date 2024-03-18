@extends('layouts.main')
@section('title', 'DC Comics|Home')

<?php
$firstComic = $comics->first();
$arr_keys = $firstComic ? array_keys($firstComic->toArray()) : [];
?>

@section('content')
    <table class="table table-dark text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                @foreach ($arr_keys as $key)
                    <th>
                        {{ strtoupper($key) }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>

            @foreach ($comics as $comic)
                <tr>
                    <th scope="row" class="px-5">{{ $loop->iteration }}</th>
                    @foreach ($comic->getAttributes() as $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
