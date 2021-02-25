@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>date</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        
                        <td>{{ $post->id}}</td>
                        <td>{{ $post->title}}</td>
                        <td>{{ $post->created_at}}</td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection