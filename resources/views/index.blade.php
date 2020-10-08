@extends('layouts.main')

@section('content')

<div class="posts-list">

    <ul class="list-group">
        <li class="list-group-item list-group-item-primary">
            <h1>Posts</h1>
            <div class="edit">
                <a class="btn btn-success" href="{!! route('post-create') !!}">NEW</a>
            </div>
        </li>
        <div id="posts"></div>
    </ul>
</div>

<script src="{!! asset('/js/app.js') !!}" charset="utf-8"></script>

@endsection
