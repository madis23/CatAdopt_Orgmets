<?php /** @var App\Post $post */ ?>
<div class="card mt-3 mb-5" style="min-width: 30%; max-width: 30%;">
    @if($post->images()->first())
        <div style="height:100%;">
            <img src="{{$post->images()->first()->path}}" class="card-img-top" style="max-height: 400px;" alt="{{$post->images()->first()->name}}">
        </div>
    @endif
    <div class="card-body">
        <h4 class="card-title">{{$post->title}}</h4>
        <h6>{{$post->gender}}</h6>
        <h6> {{$post->breed}}</h6>
        @if(isset($posts))
            <p class="card-text">{!! $post->snippet !!}...</p>
            <a href="/posts/{{$post->id}}" class="btn btn-dark">Read more</a>
        @else
            <p class="card-text"> {!! $post->body !!}</p>
        @endif
    </div>
    <div class="card-footer bg-dark text-muted">
        <b>By: </b>{{$post->author->name}} <b>At:</b> {{$post->human_date}} <br>
    </div>
</div>
