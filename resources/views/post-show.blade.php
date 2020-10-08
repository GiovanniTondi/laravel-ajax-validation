@extends('layouts.main')

@section('content')

<div class="posts-list">

    <ul class="list-group">

        <li class="list-group-item list-group-item-primary">
            <h1>{{ $post -> title }}</h1>
            <div class="edit">
                <a class="btn btn-success" href="{!! route('post-edit', $post -> id) !!}">EDIT</a>
                <a class="btn btn-dark" href="{!! route('post-index') !!}">BACK</a>
            </div>
        </li>

        <div class="card">

            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $post -> description }}</p>
                    <footer class="blockquote-footer">{{ $post -> user -> name }} - <cite title="Source Title">{{ $post -> updated_at }}</cite></footer>
                </blockquote>
            </div>
        </div>
    </ul>
</div>

@endsection
