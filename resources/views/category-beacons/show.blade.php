@extends('layout')

@section('content')
    <h1 class="title">{{ $categoryBeacon->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div class="content">
        <p>{{ $categoryBeacon->category->number }}</p>

        <p>{{ $categoryBeacon->category->name }}</p>

        <p>{{ $categoryBeacon->beacon->name }}</p>

        <form method="GET" action="/category-beacons/{{ $categoryBeacon->id }}/edit">
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Edit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
