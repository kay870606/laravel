@extends('layout')

@section('content')

    <h1 class="title">大分類</h1>

    <form method="GET" action="/categories/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">建立</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="mistab">
            <thead>
            <tr>
                <th>處理</th>
                <th>編號</th>
                <th>名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td><a href="/categories/{{ $category->id }}/edit"><img src="/storage/images/edit.gif" border="0"
                                                                            align="absmiddle"></a></td>
                    <td>{{$category->number}}</td>
                    <td>{{$category->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
