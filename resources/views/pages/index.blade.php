@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>USERS</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                <h2>{{ $user -> name }}</h2>
                <br>
                <h3>POSTS</h3>
                <ul>
                    @foreach ($user -> posts as $post)
                        <li>
                            <b>{{ $post -> title }}</b>
                            <br>
                            <span>
                                {{ $post -> body }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </li>
            <br><br><br>
        @endforeach
    </ul>
@endsection
