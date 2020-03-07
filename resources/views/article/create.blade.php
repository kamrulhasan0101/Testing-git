@extends('layout')
@section('content')
    <form method="POST" action="/articles">
        @csrf
        <input type="text" name="user_id" value="1">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="inputEmail3">
            </div>
        </div>

        <div class="form-group row">
            <label for="exampleFormControlTextarea1">Excerpt</label>
            <textarea type="text" name="excerpt" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group row">
            <label for="exampleFormControlTextarea2">Excerpt</label>
            <textarea type="text" name="body" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
        </div>


        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
        </div>
    </form>
@endsection
