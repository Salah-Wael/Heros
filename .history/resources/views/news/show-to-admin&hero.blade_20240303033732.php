@extends('news.show')

{{-- @section('css')
    @parent
@endsection --}}

@if ((auth()->user()->role == 'admin')||{})
@section('buttons')
    <div class="card my-4 mb-4">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('news.edit',$news->id) }}"><button class="btn btn-primary" style="width:100%;">Edit</button></a>
            </div>
            <div class="col-md-6">
                <form action="{{ route('news.delete',$news->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" style="width:100%;" class="btn btn-danger" name="post-delete-form"
                        value="DELETE">
                </form>
            </div>
        </div>
    </div>
@endif

@endsection
