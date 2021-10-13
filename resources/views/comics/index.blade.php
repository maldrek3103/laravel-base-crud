@extends('home')

@section('title', 'Comics')

@section('content')

    <div class="container">
        @foreach ($comics as $comic)
        <ul>
            <li><h1>{{ $comic->title }}</h1></li>
            <li>{{ $comic->description }}</li>
            <li>{{ $comic->thumb }}</li>
            <li>{{ $comic->price }}</li>
            <li>{{ $comic->series }}</li>
            <li>{{ $comic->sale_date }}</li>
            <li>{{ $comic->type }}</li>
        </ul>
        @endforeach
    </div>

@endsection