@extends('layouts.management')

@section('content')
    <h1 class="title">小分類點擊次數</h1>

    <form method="POST" action="/subcategory-counter/delete-all">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">歸零</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
            <tr>
                <th>大分類編號</th>
                <th>大分類名稱</th>
                <th>順序</th>
                <th>名稱</th>
                <th>點擊次數</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subcategories as $subcategory)
                <tr>
                    <td>{{$subcategory->category->number}}</td>
                    <td>{{$subcategory->category->name}}</td>
                    <td>{{$subcategory->order}}</td>
                    <td>{{$subcategory->name}}</td>
                    <td>{{$subcategory->subcategory_counters_count}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
