@extends('layouts.management')

@section('content')
    <h1 class="title">大分類活動</h1>

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
                <th>處理</th>
                <th>大分類編號</th>
                <th>大分類名稱</th>
                <th>名稱</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categoryActivities as $categoryActivity)
                <tr>
                    <td><a href="/category-activities/{{ $categoryActivity->id }}">處理</a></td>
                    <td>{{$categoryActivity->category->number}}</td>
                    <td>{{$categoryActivity->category->name}}</td>
                    <td>{{$categoryActivity->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
