@extends('layouts.management')

@section('content')
    <h1 class="title">推播管理</h1>

    <form method="GET" action="/category-activities/create">
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
                <th>大分類編號</th>
                <th>大分類名稱</th>
                <th>名稱</th>
                <th>價格</th>
                <th>描述</th>
                <th>圖片</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categoryActivities as $categoryActivity)
                <tr>
                    <td><a href="/category-activities/{{ $categoryActivity->id }}/edit">編輯</a></td>
                    <td>{{$categoryActivity->category->number}}</td>
                    <td>{{$categoryActivity->category->name}}</td>
                    <td>{{$categoryActivity->name}}</td>
                    <td>{{$categoryActivity->price}}</td>
                    <td>{{$categoryActivity->description}}</td>
                    <td>
                        <figure class="image is-64x64">
                            <img src="{{ $categoryActivity->image_url }}" style="width: 64px; height: 64px;">
                        </figure>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
