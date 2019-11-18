@extends('layout')

@section('content')
    <h1 class="title">{{ $beacon->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div class="content">
        <p>{{ $beacon->name }}</p>

        <p>{{ $beacon->mac }}</p>

        <form method="GET" action="/beacons/{{ $beacon->id }}/edit">
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Edit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
