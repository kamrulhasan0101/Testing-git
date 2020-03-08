@extends('layout')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                    Odvut Blog
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->excerpt}}</p>
                    <p class="card-text">{{$article->body}}</p>
                    <a href="#" class="btn btn-outline-info">Written by : {{$article->user->name}}</a><br>
                    <a href="{{route('articles.index')}}" class="btn btn-dark m-1">Back to Articles</a>
                </div>
                <div class="card-footer text-muted">

                    <a href="/articles/{{$article->id-1}}" class="card-link float-left">Previous</a>
                    Last Updated: <span class="text-dark">{{$article->updated_at}}</span>
                        <a href="/articles/{{$article->id+1}}" class="card-link float-right">Next</a>
                </div>
            </div>
        </div>
    </div>
@endsection
