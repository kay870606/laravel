@extends('layout')

@section('content')
    <h1 class="title">{{ $beacon->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div>
        <p>{{ $beacon->name }}</p>

        <p>{{ $beacon->mac }}</p>

        <p>
            <a href="/beacons/{{ $beacon->id }}/edit">Edit</a>
        </p>
    </div>

@endsection
