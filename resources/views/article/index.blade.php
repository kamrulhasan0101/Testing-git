@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h2 class="text-muted">
                Welcome to Odvut Blog!
            </h2>
            <div class="card text-center">
                <div class="card-header">
                    Odvut Blog
                </div>
                <div class="card-body">
                    <h5 class="card-title">I am Kamrul Hasan</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">

                    <a href="#" class="card-link float-left">Previous</a>
                    2 days ago
                    <a href="#" class="card-link float-right">Next</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <h2>Articles list</h2>
            @foreach($articles as $article)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->excerpt}}</p>
                        <a href="#" class="btn btn-primary">Author : {{$article->user->name}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

