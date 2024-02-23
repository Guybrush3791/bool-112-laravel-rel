@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>EDIT POSTS</h1>
    <form action="{{ route('post.update', $post -> id) }}" method="POST">

        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post -> title }}">
        <br>
        <label for="body">Body</label>
        <input type="text" name="body" id="body" value="{{ $post -> body }}">
        <br>
        <label for="user_id">User</label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user -> id}}"
                    @if ($post -> user -> id == $user -> id)
                        selected
                    @endif
                >{{ $user -> name }}</option>
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

                @foreach ($post -> tags as $post_tag)
                    @if ($post_tag -> id == $tag -> id)
                        checked
                    @endif
                @endforeach
            >
            <label
                for="{{ 'tag_id_' . $tag -> id }}">
                {{ $tag -> name }}
            </label>
            <br>
        @endforeach
        <br>
        <input type="submit" value="EDIT">
    </form>
@endsection
