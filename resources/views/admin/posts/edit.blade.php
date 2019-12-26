@extends('layouts.admin')
@section('content')
    <form action="/admin/posts/edit/{{$post->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                placeholder="Post title"
                value="{{$post->title}}"
            >
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked>
            <label class="form-check-label">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
            <label class="form-check-label">
                Female
            </label>
        </div>
        <div class="form-group">
            <label for="breed">Breed</label>
            <textarea class="form-control" id="breed" name="breed" rows="1" placeholder="Enter cat breed here...">
                {{ $post->getOriginal('breed') }}</textarea>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="12"
                      placeholder="Enter content here...">{{ $post->getOriginal('body') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image_url">Image url</label>
            <input type="text" class="form-control" name="image_url" id="image_url" placeholder="Image url here...">
        </div>
        <div class="form-group">
            <label for="image">Image upload</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
