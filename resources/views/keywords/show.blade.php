@extends('layout')

@section('content')

    <h1 class="title">顯示</h1>

    <form method="GET" action="/keywords/{{ $keyword->id }}/edit" style="margin-bottom: 1em;">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">編輯</button>
            </div>
        </div>
    </form>

    <form method="GET" action="/keywords/{{ $keyword->id }}/mappings/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">建立對應</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table">
            <tbody>
            <th>名稱</th>
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
                                    <button type="submit" class="button">刪除</button>
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
