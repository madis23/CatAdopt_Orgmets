@extends('layouts.admin')
@section('content')
    <form action="/admin/posts/new" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Post title">
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
            <label class="form-check-label" for="gender">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
            <label class="form-check-label" for="gender">
                Female
            </label>
        </div>
        <div class="form-group">
            <label for="breed">Breed</label>
            <textarea class="form-control" id="breed" name="breed" rows="1" placeholder="Enter cat breed here..."></textarea>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3" placeholder="Enter cats description here..."></textarea>
        </div>
        <div class="form-group">
            <label for="image_url">Image url</label>
            <input type="text" class="form-control" name="image_url" id="image_url" placeholder="Image url here...">
        </div>
        <div class="form-group">
            <label for="image">Image upload</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
