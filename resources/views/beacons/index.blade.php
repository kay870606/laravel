@extends('layout')

@section('content')
    <h1 class="title">Beacons</h1>

    <form method="GET" action="/beacons/create">
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
                <th>MAC</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($beacons as $beacon)
                <tr>
                    <td><a href="/beacons/{{ $beacon->id }}">處理</a></td>
                    <td>{{$beacon->name}}</td>
                    <td>{{$beacon->mac}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
