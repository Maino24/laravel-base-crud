@extends('layouts.app')
@section('page-title', 'Comics-Home')

@section('main-content')
     <!--LISTA FUMETTI -->

    @if (session('success'))
        <div class="alert alert-success">
           {{session('success')}}
        </div>
    @endif

     <div class="pt-4">
        <div class="pb-3">
            <a class="btn btn-success w-100" href="{{route('comics.create')}}">Create Comic</a>
        </div>

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
                <td class="">

                    <a href="{{route('comics.show', $elem->id)}}">
                    <p>INFO</p>
                    </a>


                    <form action="{{route('comics.destroy', $elem->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-primary" type="submit">
                            <p>DELETE</p>
                        </button>
                    </form>
                </td>


                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
@endsection
