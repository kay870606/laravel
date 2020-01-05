@extends('layouts.management')

@section('content')
    <h1 class="title">貨架位置(分類)</h1>

    <form method="GET" action="/category-beacons/create">
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
                <th>大分類編號</th>
                <th>大分類名稱</th>
                <th>Beacon名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categoryBeacons as $categoryBeacon)
                <tr>
                    <td><a href="/category-beacons/{{ $categoryBeacon->id }}/edit">編輯</a></td>
                    <td>{{$categoryBeacon->category->number}}</td>
                    <td>{{$categoryBeacon->category->name}}</td>
                    <td>{{$categoryBeacon->beacon->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
