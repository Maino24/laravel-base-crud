@extends('layouts.app')
@section('page-title', 'Comics-Home')

@section('main-content')

    <form class="pb-5 pt-5" action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripition</label>
            <input class="form-control" type="text" name="description">
            </div>
        <div class="mb-3">
            <label class="form-label">Thumb</label>
            <input class="form-control" type="text" name="thumb">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input class="form-control" type="number" name="price" step="0.01">
        </div>
        <div class="mb-3">
            <label class="form-label">Series</label>
            <input class="form-control" type="text" name="series">
        </div>
        <div class="mb-3">
            <label class="form-label">Sales Date</label>
            <input class="form-control" type="date" name="sale_date">
        </div>
        <div class="mb-3">
            <label class="form-label">Type</label>
            <input class="form-control" type="text" name="type">
        </div>
        <button class="btn btn-primary" type="summit">Crea</button>
    </form>

@endsection
