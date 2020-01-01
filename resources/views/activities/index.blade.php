@extends('layouts.management')

@section('content')
    <h1 class="title">活動</h1>

    <form method="GET" action="/activities/create">
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
                <th>處理</th>
                <th>名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($activities as $activity)
                <tr>
                    <td><a href="/activities/{{ $activity->id }}">處理</a></td>
                    <td>{{$activity->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
