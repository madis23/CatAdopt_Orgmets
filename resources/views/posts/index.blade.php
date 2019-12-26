<?php /** @var Illuminate\Pagination\LengthAwarePaginator $posts */?>
@extends('layouts.public')
@section('title', 'Cats')
@section('content')
    @foreach($posts as $key=>$post)
        @include('posts.card')
    @endforeach
    {{$posts->links()}}
@endsection
