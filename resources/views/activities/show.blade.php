@extends('layout')

@section('content')
    <h1 class="title">{{ $activity->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div>
        {{--<p>{{ $activity->number }}</p>

        <p>{{ $activity->name }}</p>--}}

        <p>
            <a href="/activities/{{ $activity->id }}/edit">Edit</a>
        </p>
    </div>

@endsection
