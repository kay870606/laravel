@extends('layouts.management')

@section('content')
    <h1 class="title">商品管理(小分類)</h1>

    <form method="GET" action="/subcategories/create">
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
                <th>大分類編號</th>
                <th>大分類名稱</th>
                <th>順序</th>
                <th>名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subcategories as $subcategory)
                <tr>
                    <td><a href="/subcategories/{{ $subcategory->id }}">處理</a></td>
                    <td>{{$subcategory->category->number}}</td>
                    <td>{{$subcategory->category->name}}</td>
                    <td>{{$subcategory->order}}</td>
                    <td>{{$subcategory->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
