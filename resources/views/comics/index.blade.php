@extends('layouts.main')

@section('title', 'Comics')

@section('section-id', 'comics')

@section('content')

         
            <h1 class="card-title text-center">Comics List</h1>
            @if(!empty($comics))
            <table class="table">
                <thead>
                  <tr>
                      <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($comics as $comic)
                  <tr>
                    <td>
                        @if($comic->thumb)
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid me-3" width="50">
                        @endif
                    </td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->price}}</td>
                    <td>
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-dark">Show</a>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
              @else
              <hr>
              <h4 class="text-center mt-3">There are no comics</h4>
              @endif

@endsection