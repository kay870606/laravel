@extends('layout')

@section('content')
    <h1 class="title">Keywords</h1>

    <form method="GET" action="/keywords/create">
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
            @foreach ($keywords as $keyword)
                <tr>
                    <th><a href="/keywords/{{ $keyword->id }}">{{$keyword->id}}</a></th>
                    <td>{{$keyword->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
