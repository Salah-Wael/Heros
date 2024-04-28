
@extends('layout.nav')

@section('title')
Heros | Request
@endsection

@section('css')

@endsection

@section('content')
    <div class="container mt-3">
    <h2>Students</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                @foreach ($collection as $item)
                    <th class="text-center">$collection</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($herosRequest as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->std_name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->district }}</td>
                <td>{{ $item->gender }}</td>
                <td class="align-middle">
                    <a href={{route('student.edit',$item->id)}}    class="btn btn-success">Edit</a>
                    <a href={{route('student.destroy',$item->id)}} class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
