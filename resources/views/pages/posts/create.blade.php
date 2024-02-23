@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>NEW POSTS</h1>
    <form action="{{ route('post.store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="body">Body</label>
        <input type="text" name="body" id="body">
        <br>
        <label for="user_id">User</label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user -> id}}">{{ $user -> name }}</option>
            @endforeach
        </select>
        <br>
        <label>
            <b>Tags</b>
        </label>
        <br>
        @foreach ($tags as $tag)
            <input
                type="checkbox"
                name="tag_id[]"
                id="{{ 'tag_id_' . $tag -> id }}"
                value="{{ $tag -> id }}"
            >
            <label
                for="{{ 'tag_id_' . $tag -> id }}">
                {{ $tag -> name }}
            </label>
            <br>
        @endforeach
        <br>
        <input type="submit" value="CREATE">
    </form>
@endsection
