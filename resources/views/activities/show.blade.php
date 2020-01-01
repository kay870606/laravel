@extends('layouts.management')

@section('content')
    <h1 class="title">顯示</h1>

    <form method="GET" action="/activities/{{ $activity->id }}/edit">
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
            <td>{{ $activity->name }}</td>
            </tbody>
            <tbody>
            <th>Image</th>
            <td>
                <figure class="image">
                    <img src="{{ $activity->image_url }}">
                </figure>
            </td>
            </tbody>
        </table>
    </div>

@endsection
