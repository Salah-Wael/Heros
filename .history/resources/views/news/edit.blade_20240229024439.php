@extends( 'layout.nav')
@section('title')
Heros | Create News
@endsection
@section('css')
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/create-post.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">
@endsection
@section('script')

@endsection

@section('admin-nav')
@parent
@endsection
@section('content')

<form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
    @csrf
        <!-- Text Inputs: <input type='date'> -->
        <div>
            <label for="title">Title</label>
            <input type='text' id="title" name="title" value="{{ old('title') }}" >
        </div>
        @if($errors->has('title'))
            <div class="alert alert-danger">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            @endif

        <label for="content">Content</label>
        <textarea id="content" name="content" rows="4" >{{ old('content') }}</textarea>
        @if($errors->has('content'))
            <div class="alert alert-danger">
                @error('content')
                    {{ $message }}
                @enderror
            </div>
        @endif


        <div class="form-group">
            <label for="upload_file" class="control-label col-sm-3">Upload an Image</label>
            <div class="col-sm-9">
                <input class="form-control" type="file" name="image" id="image" accept=".jpeg, .jpg, .png, .jfif, .svg"  required>

            </div>
        </div>

        @if($errors->has('image'))
        <div class="alert alert-danger">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        @endif

        <input type="submit" value="Create">
        <input type="reset" value="Reset">

    {{-- <script type="text/javascript">
        Dropzone.options.dropzone =
        {
            paramName: "image",
            maxFilesize: 5,
            maxFile: 1,
            dictDefaultMessage: "Drop your image here or click to upload",
            // renameFile: function(image) {
            //     var dt= new Date();
            //     var time= dt.getTime();
            //     return time + image.name;
            // },
            acceptedFiles: ".jpeg,.jpg,.png,.jfif,.svg",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file,response){
            console.log(response.success);
            },
            error: function(file,response){
            return false;
            }
        };
    </script> --}}
    </form>
@endsection




