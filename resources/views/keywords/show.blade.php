@extends('layout')

@section('content')

    <h1 class="title">Show</h1>

    <form method="GET" action="/keywords/{{ $keyword->id }}/edit" style="margin-bottom: 1em;">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Edit</button>
            </div>
        </div>
    </form>

    <form method="GET" action="/keywords/{{ $keyword->id }}/mappings/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Mapping</button>
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
                    <th>Mapping</th>
                    <td>{{$keywordMapping->name}}</td>
                    <td>
                        <form action="/keywords/{{ $keyword->id }}/mappings/{{ $keywordMapping->id }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button">Delete</button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
