@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12 border">
            <h2 class="text-left">Create Article</h2><hr>
    <form method="POST" action="{{route('articles.store')}}">
        @csrf
        <input type="hidden" name="user_id" value="1">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="inputEmail3" value="{{old('title')}}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="exampleFormControlTextarea1 col-sm-2">Excerpt</label>
            <textarea type="text" name="excerpt" class="form-control col-sm-10" id="exampleFormControlTextarea1" rows="3">{{old('excerpt')}}</textarea>
            @error('excerpt')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group row">
            <label for="exampleFormControlTextarea2">Excerpt</label>
            <textarea type="text" name="body" class="form-control" id="exampleFormControlTextarea2" rows="3">{{old('body')}}</textarea>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
        </div>
    </form>
        </div>
    </div>
@endsection
