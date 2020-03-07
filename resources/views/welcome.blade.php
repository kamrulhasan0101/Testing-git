@extends('layout')
@section('content')
        <div class="row">
            @if (Route::has('login'))
                <div class="top-right links col-12">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content col-12 text-center">

                <h1 class="text-muted"style="padding-top: 250px">
                    Welcome to Odvut World!
                </h1>

            </div>
        </div>
    @endsection
