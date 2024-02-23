@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>POSTS</h1>
    <a href="{{ route('post.create') }}">
        CREATE
    </a>
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
                <br>
                <span>
                    @foreach ($post -> tags as $tag)
                        #{{ $tag -> name }}
                    @endforeach
                </span>
                <br>
                <a href="{{ route('post.edit', $post -> id) }}">
                    EDIT
                </a>
            </li>
            <br><br>
        @endforeach
    </ul>
@endsection
