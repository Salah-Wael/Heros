
@extends('layout.nav')

@section('title')
Heros | Request
@endsection

@section('content')
    @if (session('success'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
            {{ session('success')  }}
        </div>
        {!! '<br><br>' !!}
    @endif
    <div class="container mt-3">
        <div class="col-md-6">
                    <a href="{{ route('heros.show_requests') }}"><button class="btn btn-primary" style="width:100%;">Go to Heros requests</button></a>
                </div>
    @if (!$hero->isEmpty())

    <h2>Heros Requests</h2>
    <table class="table table-bordered">
        <thead>
            {{-- @dd($herosRequest) --}}
            <tr>
                @foreach ($hero[0]->getAttributes() as $key => $value)
                    <th class="text-center">{{ $key }}</th>
                @endforeach

                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hero as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->{'firstName'} }}</td>
                <td>{{ $item->{'lastName'} }}</td>
                <td>{{ $item->{'fullName'} }}</td>
                <td>{{ $item->{'shortName'} }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->sport }}</td>
                <td>{{ $item->origin_country }}</td>
                <td>{{ $item->play_country }}</td>
                <td>{{ \Carbon\Carbon::parse($item->{'birth date'})->format('Y-m-d') }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->auth_id }}</td>
                <td class="align-middle">
                    <a href="{{ route('heros.resotre_request', $item->id) }}" class="btn btn-success">v</a>
                    <div class="col-md-6">
                        <form action="{{ route('heros.force_delete_request', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" style="width:100%;" class="btn btn-danger" name="post-delete-form" value="DELETE">
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                @foreach ($item->images as $image)
                    <td>
                        <img style="width: 60px" src="{{ asset('assets/images/HerosImages/' . $image->image) }}" alt="Hero Image">
                    </td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        Not found
    @endif
</div>
@endsection
