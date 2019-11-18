@extends('layout')

@section('content')
    <h1 class="title">{{ $activity->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div class="content">
        <p>{{ $activity->name }}</p>

        <figure class="image is-128x128">
            <img src="{{  $activity->url  }}">
        </figure>

        <form method="GET" action="/activities/{{ $activity->id }}/edit">
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Edit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
