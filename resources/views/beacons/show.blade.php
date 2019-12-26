@extends('layout')

@section('content')
    <h1 class="title">顯示</h1>

    <form method="GET" action="/beacons/{{ $beacon->id }}/edit">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">編輯</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table">
            <tbody>
            <th>名稱</th>
            <td>{{ $beacon->name }}</td>
            </tbody>
            <tbody>
            <th>Mac</th>
            <td>{{ $beacon->mac }}</td>
            </tbody>
        </table>
    </div>

@endsection
