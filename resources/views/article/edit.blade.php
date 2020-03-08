@extends('layout')
@section('content')
    <h2 class="text-left">Update Article</h2><hr>
    <form method="POST" action="{{route('articles.update',$article->id)}}">
        @csrf
        @method('PUT')
        <input type="hidden" name="user_id" value="1">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="inputEmail3" value="{{$article->title}}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="exampleFormControlTextarea1">Excerpt</label>
            <textarea type="text" name="excerpt" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$article->excerpt}}</textarea>
            @error('excerpt')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group row">
            <label for="exampleFormControlTextarea2">Excerpt</label>
            <textarea type="text" name="body" class="form-control" id="exampleFormControlTextarea2" rows="3">{{$article->body}}</textarea>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
