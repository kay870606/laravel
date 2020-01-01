@extends('layouts.management')

@section('content')
    <h1 class="title">查詢商品</h1>

    <form method="GET" action="/products/create">
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
                <th>國際條碼</th>
                <th>名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td><a href="/products/{{ $product->id }}">處理</a></td>
                    <td>{{$product->ean}}</td>
                    <td>{{$product->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
