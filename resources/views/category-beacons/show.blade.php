@extends('layouts.management')

@section('content')
    <h1 class="title">顯示</h1>

    <form method="GET" action="/category-beacons/{{ $categoryBeacon->id }}/edit">
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">編輯</button>
            </div>
        </div>
    </form>

    <div class="content">
        <p>{{ $categoryBeacon->category->number }}</p>

        <p>{{ $categoryBeacon->category->name }}</p>

        <p>{{ $categoryBeacon->beacon->name }}</p>


    </div>

@endsection
