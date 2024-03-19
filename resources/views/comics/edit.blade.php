@extends('layouts.main')
@section('title', 'DC Comics|Home')



<form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST" class="p-5">

    @csrf
    @method('Patch')
    <h2 class="mb-4">
        Edit {{ $comic->title }}
    </h2>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control w-25" id="title" name="title" value="{{ $comic->title }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="4" class="form-control w-50">
            {{ $comic->description }}
        </textarea>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control w-25" id="thumb" name="thumb" value=" {{ $comic->thumb }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" class="form-control w-25" id="price" name="price" value="{{ $comic->price }}"
            step="0.01">

    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control  w-25" id="series" name="series" value="{{ $comic->series }}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date </label>
        <input type="date" class="form-control w-25" id="sale_date" name="sale_date"
            value="{{ \Carbon\Carbon::parse($comic->sale_date)->format('Y-m-d') }}">

    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control w-25" id="type" name="type" value="{{ $comic->type }}">
    </div>
    <button type="submit" class="btn btn-warning">Edit</button>
</form>
