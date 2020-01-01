@extends('layouts.management')

@section('content')
    <h1 class="title">顯示</h1>

    <form method="GET" action="/subcategories/{{ $subcategory->id }}/edit">
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
            <th>大分類 number</th>
            <td>{{ $subcategory->category->number }}</td>
            </tbody>
            <tbody>
            <th>大分類 name</th>
            <td>{{ $subcategory->category->name }}</td>
            </tbody>
            <tbody>
            <th>Order</th>
            <td>{{ $subcategory->order }}</td>
            </tbody>
            <tbody>
            <th>名稱</th>
            <td>{{ $subcategory->name }}</td>
            </tbody>
        </table>
    </div>

@endsection
