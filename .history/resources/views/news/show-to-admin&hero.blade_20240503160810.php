@extends('news.show')

@if ((auth()->user()->role == 'admin') || ((auth()->user()->role == 'hero') && auth()->user()->id == $news->user_id))
    @section('buttons')
        <div class="card my-4 mb-4">
            <div class="row">
                @if (((auth()->user()->role == 'admin') && $news->role != 'hero')|| ((auth()->user()->role == 'hero') && auth()->user()->id == $news->user_id))
                    <div class="col-md-6">
                        <a href="{{ route('news.edit',$news->id) }}"><button class="btn btn-primary" style="width:100%;">Edit</button></a>
                    </div>
                @endif
                <div class="col-md-6">
                    <form action="{{ route('news.delete',$news->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" style="width:100%;" class="btn btn-danger" name="post-delete-form" value="DELETE">
                    </form>
                </div>
            </div>
        </div>
    @endsection
@endif
