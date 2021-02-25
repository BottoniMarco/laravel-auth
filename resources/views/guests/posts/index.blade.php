@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>blog</h1>

        @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="card-body">
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection