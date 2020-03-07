@extends('layout')
@section('content')

    <table class="table table-striped table-dark">
        <thead>
        <tr class="text-info">
            <th scope="col">#</th>
            <th scope="col">Article Title</th>
            <th scope="col">Author</th>
            <th scope="col">Created_at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{++$i}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->user_id}}</td>
            <td>{{$article->created_at}}</td>
            <td class="text-danger">Edit/Delete</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
