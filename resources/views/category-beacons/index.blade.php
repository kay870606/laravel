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

    <div class="table-container">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category number</th>
                <th>Category name</th>
                <th>Beacon name</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                @foreach ($category->beacons as $beacon)
                    <tr>
                        <th><a href="/category-beacons/{{ $beacon->pivot->id }}">{{$beacon->pivot->id}}</a></th>
                        <td>{{$category->number}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$beacon->name}}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
