@extends('layouts.management')

@section('content')
    <h1 class="title">關鍵字管理</h1>

    <form method="GET" action="/keywords/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">建立</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
            <tr>
                <th>編輯</th>
                <th>名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($keywords as $keyword)
                <tr>
                    <td><a href="/keywords/{{ $keyword->id }}">編輯</a></td>
                    <td>{{$keyword->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
