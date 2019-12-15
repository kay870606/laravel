@extends('layout')

@section('content')

    <h1 class="title">Show</h1>

    <form method="GET" action="/keywords/{{ $keyword->id }}/edit">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Edit</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table">
            <tbody>
            <th>Name</th>
            <td>{{ $keyword->name }}</td>
            </tbody>
            @foreach ( $keyword->keywordMappings as $keywordMapping)
                <tbody>
                <tr>
                    <th>Mapping : {{$keywordMapping->id}}</th>
                    <td>{{$keywordMapping->name}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
