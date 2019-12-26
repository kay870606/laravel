@extends('layout')

@section('content')
    <h1 class="title">建立</h1>

    <form method="POST" action="/subcategories">
        @csrf

        <div class="field">
            <label class="label">大分類</label>
            <div class="select">
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->number.' '.$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">順序</label>
            <div class="control">
                <input type="text" name="order" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">名稱</label>
            <div class="control">
                <input type="text" name="name" class="input" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">建立</button>
            </div>
        </div>

        @include ('errors')
    </form>
@endsection
