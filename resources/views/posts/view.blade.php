@extends('layouts.public')
@section('title', $post->title)
@section('gender', $post->gender)
@section('content')
    <div class="container d-flex mt-3 mb-5" style="min-width: 30%;">
        @if($post->images()->first())
            <div style="height:100%;">
                <img src="{{$post->images()->first()->path}}" class="card-img-top col-4" style="height: auto; width: auto; max-width: 100%; margin: 0 auto;" alt="{{$post->images()->first()->name}}">
            </div>
        @endif
        <div class="card-body col-8">
            <h5 class="card-title" style="border-bottom: 1px solid black">{{$post->title}}</h5>
            <h6 style="border-bottom: 1px solid black; font-weight: bold;">Gender:</h6>
            <p>{{$post->gender}}</p>
            <h6 style="border-bottom: 1px solid black; font-weight: bold;">Breed:</h6>
            <p>{{$post->breed}}</p>
            @if(isset($posts))
                <p class="card-text" style="border-bottom: 1px solid black">{!! $post->snippet !!}...</p>

            @else
                <p class="card-text font-weight-bold" style="border-bottom: 1px solid black;">About: </p>
                <p>{!! $post->body !!}</p>
            @endif
            <a href="mailto:{{$post->author->email}}" class="btn btn-dark">Contact:</a>
        </div>

    </div>
    <div>
        <a href="/" class="btn btn-dark mb-2">Back</a>
        <div class="card-footer bg-dark text-muted">
            <b>By: </b>{{$post->author->name}} <b>At:</b> {{$post->human_date}} <br>
        </div>
    </div>
@endsection
