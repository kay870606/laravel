@extends('layout')

@section('content')
    <h1 class="title">Category Beacon</h1>

    <form method="GET" action="/category-beacons/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <div class="content">
        <ol>
            @foreach ($categoryBeacons as $categoryBeacon)
                <li>
                    <a href="/category-beacons/{{ $categoryBeacon->id }}">
                        {{ $categoryBeacon->category->number .'  '.$categoryBeacon->beacon->name }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

@endsection
