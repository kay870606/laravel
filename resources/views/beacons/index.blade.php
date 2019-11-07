@extends('layout')

@section('content')
    <h1 class="title">Beacons</h1>

    <form method="GET" action="/beacons/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <div class="content">
        <ol type="1">
            @foreach ($beacons as $beacon)
                <li>
                    <a href="/beacons/{{ $beacon->id }}">
                        {{ $beacon->name .'   '.$beacon->mac }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

@endsection
