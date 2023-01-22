@extends('layouts.app')
@section('page-title', 'Comics-Home')

@section('main-content')
    <div class="mainShow d-flex p-4">
        <div class="pe-3">
            <h1>{{$comic->title}}</h1>
            <p>{{!!$comic->description!!}}</p>
        </div>
        <div>
            <img src="{{$comic->thumb}}" alt="">
        </div>
    </div>
@endsection
