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

    <div class="table-container">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($activities as $activity)
                <tr>
                    <td><a href="/activities/{{ $activity->id }}">{{$activity->id}}</a></td>
                    <td>{{$activity->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
