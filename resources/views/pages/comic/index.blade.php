@extends('layouts.app')
@section('page-title', 'Comics-Home')

@section('main-content')
     <!--LISTA FUMETTI -->


    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">thumb</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($comics as $elem)
            <tr>

                <td>{{$elem->id}}</td>
                <td>{{$elem->title}}</td>
                <td>{{$elem->description}}</td>
                <td><img src="{{$elem->thumb}}" alt=""></td>
                <td>{{$elem->price}}</td>
                <td>{{$elem->series}}</td>
                <td>{{$elem->sale_date}}</td>
                <td>{{$elem->type}}</td>


            </tr>


            @endforeach


        </tbody>
      </table>
@endsection
