@extends('layout')

@section('content')

    <h1 class="title">顯示</h1>

    <form method="GET" action="/categories/{{ $category->id }}/edit">
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
            <th>編號</th>
            <td>{{ $category->number }}</td>
            </tbody>
            <tbody>
            <th>名稱</th>
            <td>{{ $category->name }}</td>
            </tbody>
        </table>
    </div>

@endsection
