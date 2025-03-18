@extends('layouts.master')

@section('styles')
@endsection

@section('content')

    <div>
        <x-content>
            @foreach ($posts as $post)
                <h2>{{ $post->title }} by {{ $post->user->name }}</h2>
                <p>{{ $post->content }}</p>

                <h3>Comments:</h3>
                @foreach ($post->comments as $comment)
                    <p>{{ $comment->content }}</p>
                @endforeach

                <h3>Tags:</h3>
                @foreach ($post->tags as $tag)
                    <span>{{ $tag->name }}</span>
                @endforeach
            @endforeach
        </x-content>
    </div>



    <div>

    </div>
@endsection

