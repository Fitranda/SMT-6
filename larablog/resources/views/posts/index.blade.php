@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="jumbotron mt-2">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{ $post->cover_image }}" width="100%" alt="">
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Write on {{ $post->created_at }} by {{ $post->user->name }}</small>
                    </div>
                </div>

            </div>
        @endforeach
        {{ $posts->links('pagination::bootstrap-4') }}
    @else
            <p>No post found</p>
    @endif
@endsection
