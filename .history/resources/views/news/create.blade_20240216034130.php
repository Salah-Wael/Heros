{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}
@extends( 'admin.home')
@section('title')
    Heros | Create News
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.css">
<link rel="stylesheet" href="{{ asset('/assets/css/create-post.css') }}">
@endsection
@section('content')
    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data" class="dropzone" id="imageDropzone">
    @csrf
        <!-- Text Inputs: <input type='date'> -->
        @if($errors->has('title'))
            <div class="alert alert-danger">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
        @endif
        <div>
        <label for="title">Title</label>
        <input type='text' id="title" name="title" value="{{ old('title') }}" >
        </div>
        @if($errors->has('content'))
            <div class="alert alert-danger">
                @error('content')
                    {{ $message }}
                @enderror
            </div>
        @endif
        <label for="content">Content</label>
        <textarea id="content" name="content" rows="4" >{{ old('content') }}</textarea>


        <!-- Submit Input: <input type='submit'> -->
        <input type="submit" value="Create">

        <!-- Reset Input: <input type='reset'> -->
        <input type="reset">
        @if($errors->has('image'))
        <div class="alert alert-danger">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        @endif
        {{-- <input type="hidden" name="image" id="imagePath"> --}}
    </form>
@endsection

    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.js"></script>

