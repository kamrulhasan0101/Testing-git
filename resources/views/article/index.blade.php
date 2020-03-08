@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h2 class="text-dark">
                Thanks to owner of this cafe Mr & Mrs. Kamrul Hasan.
            </h2>
            <div class="card text-center">
                <div class="card-header text-muted">
                    Odvut Nodi Coffee House
                </div>
                <div class="card-body">
                    <h5 class="card-title">Welcome to Odvut Blog!</h5>
                    <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('articles.create')}}" class="btn btn-outline-primary">Create New Article</a>
                </div>
                <div class="card-footer text-muted">
                    <a href="#" class="card-link float-left">Previous</a>
                    <span class="font-italic">Last updated a few min ago</span>
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
                        <p class="card-text text-muted">{{$article->excerpt}}</p>
                        <a href="#" class="btn btn-outline-primary">Author : {{$article->user->name}}</a>
                        <div class="row">
                            <div class="col-12">
                                <form method="POST" action="{{route('articles.destroy',$article->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('articles.edit',$article->id)}}" class="btn btn-success">Update</a>
                                    <a href="{{route('articles.show',$article->id)}}" class="btn btn-outline-primary">Details</a>
                                    <button type="submit" class="btn btn-danger" onclick= "return confirm('Are You Sure to Delete?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

