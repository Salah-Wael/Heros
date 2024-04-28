
@extends('layout.nav')

@section('title')
Heros | Request
@endsection

@section('css')

@endsection

@section('content')
    <div class="container mt-3">
    <h2>Heros Requests</h2>
    <table class="table table-bordered">
        <thead>
            {{-- @dd($herosRequest) --}}
            <tr>
                @foreach ($herosRequest[0]->getAttributes() as $key => $value)
                    <th class="text-center">{{ $key }}</th>
                    @endforeach
                    <th class="text-center">{{ $key }}</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($herosRequest as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->{'first name'} }}</td>
                <td>{{ $item->{'last name'} }}</td>
                <td>{{ $item->{'full name'} }}</td>
                <td>{{ $item->{'short name'} }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->sport }}</td>
                <td>{{ $item->origin_country }}</td>
                <td>{{ $item->play_country }}</td>
                <td>{{ \Carbon\Carbon::parse($item->{'birth date'})->format('Y-m-d') }}</td>
                <td>{{ $item->gender }}</td>
                <td class="align-middle">
                    <a href="{{ route('heros.accept_request', $item->id) }}" class="btn btn-success">Accept</a>
                    <a href="{{ route('heros.delete_request', $item->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection