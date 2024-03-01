@extends( 'layout.nav')
@section('title')
Heros | Create News
@endsection
@section('css')
<meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/create-post.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('script')
{{-- <script src="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> --}}

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.js"></script>


@endsection
@section('admin-nav')
@parent

@endsection
@section('content')

<form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
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
        <br>
        <!-- Reset Input: <input type='reset'> -->
        <input type="reset">
        @if($errors->has('image'))
        <div class="alert alert-danger">
            @error('image')
            {{ $message }}
            @enderror
        </div>
        @endif
        {{-- <input type="hidden" name="upload_file" id="upload_file"> --}}
        {{-- <div class="form-group">
            <label for="upload_file" class="control-label col-sm-3">Upload File</label>
            <div class="col-sm-9">
                <input class="form-control" type="file" name="upload_file" id="upload_file">
            </div>
        </div> --}}
    </form>
    <script type="text/javascript">
        Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.jfif,.svg",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file,response){
            console.log(response);
            }
            error: function(file,response){
            return false;
            }
        };
    </script>


        @endsection




