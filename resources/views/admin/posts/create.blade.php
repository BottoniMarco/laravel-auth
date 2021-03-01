@extends('layouts.app')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')


        <h2>Article</h2>

        <div class="form-group">
            <div class="form-group">
                <label for="title"></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="body"></label>
                <textarea  class="form-control" id="body" name="body" rows="8">
                    {{ old('body') }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="img_path">Immagine</label>
                <input class="form-control" type="file" id="img_path" name="img_path" accept="image/*">  
            </div>


            
            <button type="submit" class="btn btn-primary">Submit</button>
            {{-- <a class="btn btn-primary" href="{{ route('cars.index') }}">home</a> --}}

    </form>


@endsection
