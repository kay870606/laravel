@extends('layout')

@section('content')
    <h1 class="title">Subcategories</h1>

    <form method="GET" action="/subcategories/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth ">
            <thead class="">
            <tr>
                <th>ID</th>
                <th>大分類編號</th>
                <th>大分類名稱</th>
                <th>順序</th>
                <th>名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subcategories as $subcategory)
                <tr>
                    <th><a href="/subcategories/{{ $subcategory->id }}">{{$subcategory->id}}</a></th>
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
