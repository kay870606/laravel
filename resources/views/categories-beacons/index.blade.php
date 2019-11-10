@extends('layout')

@section('content')
    <h1 class="title">Category Beacon</h1>

    <form method="GET" action="/category_beacon/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <div class="content">
        <ol>
            @foreach ($categoriesBeacons as $categoryBeacon)
                <li>
                    <a href="/category_beacon/{{ $categoryBeacon->id }}">
                        {{ $categoryBeacon->category->number .'  '.$categoryBeacon->beacon->name }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

@endsection
