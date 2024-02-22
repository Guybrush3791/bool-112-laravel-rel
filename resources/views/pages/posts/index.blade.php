@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>POSTS</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <b>{{ $post -> title }}</b>
                <br>
                <span>
                    {{ $post -> body }}
                </span>
                <br>
                <b>
                    {{ $post -> user -> name }}
                </b>
            </li>
            <br><br>
        @endforeach
    </ul>
@endsection
