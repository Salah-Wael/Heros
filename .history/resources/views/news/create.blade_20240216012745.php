<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.css">
</head>
<body>
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
        <input type='text' id="title" name="title" value="{{ old('title') }}" required>
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
        <input type="hidden" name="image" id="imagePath">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.js"></script>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
    }

    form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    }

    input,
    textarea,
    select {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    input[type="checkbox"],
    input[type="radio"] {
    margin-right: 5px;
    }

    input[type="submit"],
    input[type="reset"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
    background-color: #45a049;
    }
</style>
</html>
