@extends( 'news.create')

@section('title')
    Heros | Edit News
@endsection

@section('admin-nav')
    @parent
@endsection

@section('content')

<form action="{{ route('news.update',$news->id) }}" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
    @csrf
    @method('PUT')

    <!-- Text Inputs: <input type='date'> -->
    <div>
        <label for="title">Title</label>
        <input type='text' id="title" name="title" value="{{ $news->title }}" >
    </div>

    @if($errors->has('title'))
        <div class="alert alert-danger">
            @error('title')
                {{ $message }}
            @enderror
        </div>
    @endif

    <label for="content">Content</label>
    <textarea id="content" name="content" rows="4" >{{ $news->content }}</textarea>
    @if($errors->has('content'))
        <div class="alert alert-danger">
            @error('content')
                {{ $message }}
            @enderror
        </div>
    @endif

    <div class="form-group">
        <label for="upload_file" class="control-label col-sm-3">Uploaded Image</label>
        <div class="col-sm-9">
            <input class="form-control" type="file" name="image" id="image" accept=".jpeg, .jpg, .png, .jfif, .svg">
        </div>

        <img src="{{ asset("assets/images/news/".$news->image) }}" alt="{{ $news->title }}">

    </div>

    @if($errors->has('image'))
        <div class="alert alert-danger">
            @error('image')
                {{ $message }}
            @enderror
        </div>
    @endif
    
    <input type="submit" value="Edit">
        
</form>
@endsection




