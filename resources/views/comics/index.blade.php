@extends('layouts.main')

@section('title', 'Comics')

@section('section-id', 'comics')

@section('content')

    
        {{-- @foreach ($comics as $comic) --}}
        
            {{-- <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}">
            <div class="card-body">
              <h2 class="card-title">{{ $comic->title }}</h2>
              <h4>{{ $comic->series }}</h4>
              <p class="card-text">{{ $comic->description }}</p>
              <p>{{ $comic->price }}</p>
              <p>{{ $comic->sale_date }}</p>
              <p>{{ $comic->type }}</p>
            </div> --}}
         
            <h1 class="card-title text-center">Comics List</h1>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse($comics as $comic)
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                    @empty 
                    <tr>
                        <td colspan="5" class="text-center">There are no comics</td>
                    </tr>
                    @endforelse
                </tbody>
              </table>
        {{-- @endforeach --}}

@endsection