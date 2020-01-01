@extends('layouts.management')

@section('content')
    <h1 class="title">編輯</h1>

    <form method="POST" action="/subcategories/{{ $subcategory->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">大分類</label>
            <div class="select">
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->number.'  '.$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">Order</label>
            <div class="control">
                <input type="text" name="order" class="input"  value="{{ $subcategory->order }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label">名稱</label>
            <div class="control">
                <input type="text" name="name" class="input"  value="{{ $subcategory->name }}" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">更新</button>
            </div>
        </div>
    </form>

    @include ('errors')

    <form method="POST" action="/subcategories/{{ $subcategory->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">刪除</button>
            </div>
        </div>
    </form>
@endsection
