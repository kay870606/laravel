@extends('layout')

@section('content')
    <h1 class="title">Activities</h1>

    <form method="GET" action="/activities/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <div class="content">
        <ol type="1">
            @foreach ($activities as $activity)
                <li>
                    <a href="/activities/{{ $activity->id }}">
                        {{ $activity->name }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

@endsection
