@extends('layouts.management')

@section('content')

    <h1 class="title">商品管理(大分類)</h1>

    <form method="GET" action="/categories/create">
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
                <th>編號</th>
                <th>名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td><a href="/categories/{{ $category->id }}/edit">編輯</a></td>
                    <td>{{$category->number}}</td>
                    <td>{{$category->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
