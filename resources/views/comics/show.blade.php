@extends('layouts.main')

@section('title', $comic->title)

@section('section-id', 'comic-show')

@section('content')
    <div class="card-title">
        <h1 class="text-center">{{$comic->title}}</h1>
        <hr>
    </div>
    <div class="card-body row">
        <div class="col-3 text-center">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
        </div>
        <div class="col-9">
            <p>{!! $comic->description !!}</p>
           <hr class="my-5">
            <div class="d-flex justify-content-between align-items-end">
                <div>
                    <p class="text-muted">Serie: {{$comic->series}}</p>
                    <p class="text-muted">Sale date: {{$comic->sale_date}}</p>
                </div>
                <p>Price: {{$comic->price}}</p>
            </div>
           
        </div>
    </div>
@endsection