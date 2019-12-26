@extends('layout')

@section('content')
    <h1 class="title">顯示</h1>

    <form method="GET" action="/category-activities/{{ $categoryActivity->id }}/edit">
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
            <td>{{ $categoryActivity->category->number }}</td>
            </tbody>
            <tbody>
            <th>大分類 name</th>
            <td>{{ $categoryActivity->category->name }}</td>
            </tbody>
            <tbody>
            <th>名稱</th>
            <td>{{ $categoryActivity->name }}</td>
            </tbody>
            <tbody>
            <th>Image</th>
            <td>
                <figure class="image">
                    <img src="{{ $categoryActivity->image_url }}">
                </figure>
            </td>
            </tbody>
        </table>
    </div>

@endsection
