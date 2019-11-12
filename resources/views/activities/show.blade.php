@extends('layout')

@section('content')
    <h1 class="title">{{ $activity->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div>
        <p>{{ $activity->name }}</p>

        <figure class="image is-128x128">
            <img src="{{ asset( 'storage/' . $activity->image_path ) }}">
        </figure>

        <p>
            <a href="/activities/{{ $activity->id }}/edit">Edit</a>
        </p>
    </div>

@endsection
