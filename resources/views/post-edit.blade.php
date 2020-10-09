@extends('layouts.main')

@section('content')

<div class="posts-list">

    <ul class="list-group">

        <li class="list-group-item list-group-item-primary">
            <h1>Edit Post</h1>
            <div class="edit">
                <a class="btn btn-danger" href="{!! route('post-delete', $post -> id) !!}">DELETE</a>
                <a class="btn btn-dark" href="{!! route('post-show', $post -> id) !!}">BACK</a>
            </div>
        </li>

        <li class="list-group-item">

            <form class="new-post" action="{!! route('post-update', $post -> id) !!}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post -> title }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3">
                        {{ $post -> description }}
                    </textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="like">Likes</label>
                    <input type="number" class="form-control @error('like') is-invalid @enderror" name="like" min="0" value="{{ $post -> like }}">
                    @error('like')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </li>
    </ul>
</div>

@endsection
