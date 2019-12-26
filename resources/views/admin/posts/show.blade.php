@extends('layouts.admin')
@section('content')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{$post->id}}</td>
            </tr>
            <tr>
                <th scope="row">Title</th>
                <td>{{$post->title}}</td>
            </tr>
            <tr>
                <th scope="row">Body</th>
                <td>{!! $post->body !!}</td>
            </tr>
            <tr>
                <th scope="row">Gender</th>
                <td>{{$post->gender}}</td>
            </tr>
            <tr>
                <th scope="row">Breed</th>
                <td>{{$post->breed}}</td>
            </tr>
            <tr>
                <th scope="row">Author</th>
                <td>{{$post->author->name}}</td>
            </tr>
            <tr>
                <th scope="row">Created</th>
                <td>{{$post->created_at}}</td>
            </tr>
            <tr>
                <th scope="row">Modified</th>
                <td>{{$post->updated_at}}</td>
            </tr>
            <tr>
                <th scope="row">Images</th>
                <td>
                    @foreach($post->images as $image)
                        <img src="{{$image->path}}" alt="{{$image->name}}" class="img-thumbnail">
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
@endsection
