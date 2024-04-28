
@extends('layout.nav')

@section('title')
Heros | Request
@endsection

@section('css')

@endsection

@section('content')
    <div class="container mt-3">
    <h2>Heros Requests</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                @foreach ($herosRequest as $key => $value)
                    <th class="text-center">{{ $key }}</th>
                @endforeach

            </tr>
        </thead>
        <tbody>
            @foreach ($herosRequest as $item)
            <tr>
                <td>{{ $item->firstName }}</td>
                <td>{{ $item->lastName }}</td>
                <td>{{ $item->fullName }}</td>
                <td>{{ $item->shortName }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->sport }}</td>
                <td>{{ $item->origin_country }}</td>
                <td>{{ $item->play_country }}</td>
                <td>{{ $item->birthDate }}</td>
                <td>{{ $item->gender }}</td>
                <td class="align-middle">
                    <a href={{route('heros.accept_request',$item->id)}} class="btn btn-success">Accept</a>
                    <a href={{route('heros.delete_request',$item->id)}} class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
