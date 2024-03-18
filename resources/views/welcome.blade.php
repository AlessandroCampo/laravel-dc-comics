@extends('layouts.main')
@section('title', 'DC Comics|Home')

<?php
$arr_keys = array_keys($comics[0]);

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
                    @foreach ($comic as $key => $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
