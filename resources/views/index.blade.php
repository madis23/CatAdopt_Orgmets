@extends('layouts.public')
@section('title', 'Cat Adopt')
@section('content')
<div class="container d-flex" style="border-bottom: 3px solid darkgrey">
    <div class="col-4">
        <div class="card-img">
            <img src="/pictures/pic1.jpg" class="w-100 p-3">
        </div>
    </div>
    <div class="col-8">
        <div class="p-3">
            <h2>Adopt Today!</h2>
            <p class="m-0 p-0 col-6">Attack the child sniff other cat's butt and hang jaw half open thereafter hunt by meowing loudly at 5am
                next to human slave food dispenser, or suddenly go on wild-eyed crazy rampage for licks paws i just saw
                other cats inside the house and nobody ask me before using my litter box. </p>
            <a class="btn btn-dark mt-3" href="/admin/posts/new">Add Post</a>
        </div>
    </div>
</div>
    <div><h2>Available Cats</h2></div>
    <div class="card-deck">
            @foreach($posts as $key=>$post)
                @include('posts.card')
            @endforeach

    </div>
@endsection
