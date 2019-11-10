@extends('layout')

@section('content')
    <h1 class="title">{{ $categoryBeacon->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div>
        <p>{{ $categoryBeacon->category->number }}</p>

        <p>{{ $categoryBeacon->category->name }}</p>

        <p>{{ $categoryBeacon->beacon->name }}</p>

        <p>
            <a href="/category_beacon/{{ $categoryBeacon->id }}/edit">Edit</a>
        </p>
    </div>

@endsection
