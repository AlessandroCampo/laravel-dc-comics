@extends('layouts.main')
@section('title', 'DC Comics|Home')



<form action="{{ route('comics.store') }}" method="POST" class="p-5">
    @csrf
    <h2 class="mb-4">
        Create new Comic
    </h2>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control w-25" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="4" class="form-control w-50"></textarea>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control w-25" id="thumb" name="thumb">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" class="form-control  w-25" id="price" name="price" step="0.01">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control  w-25" id="series" name="series">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date </label>
        <input type="date" class="form-control  w-25" id="sale_date" name="sale_date">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control w-25" id="type" name="type">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
