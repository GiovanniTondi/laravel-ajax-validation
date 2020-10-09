@extends('layouts.main')

@section('content')

<div class="posts-list">

    @if (session('message'))

        <div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" role="alert">

            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>
    @endif

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

@endsection
