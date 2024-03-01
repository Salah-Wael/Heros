@extends( 'layout.nav')
@section('title')
    Heros | Create News
@endsection
@section('css')
<meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/create-post.css') }}">
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

@endsection
@section('admin-nav')
    @parent

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
    <script type="text.javascript">
    Dropzone.options.dropzone=
    {
        maxFilesize: 12,
    }


    @endsection




