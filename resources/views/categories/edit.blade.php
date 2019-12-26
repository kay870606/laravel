@extends('layout')

@section('content')
    <h1 class="title">編輯</h1>

    <form method="POST" action="/categories/{{ $category->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">編號</label>
            <div class="control">
                <input type="text" name="number" class="input" value="{{ $category->number }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label">名稱</label>
            <div class="control">
                <input type="text" name="name" class="input" value="{{ $category->name }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">更新</button>
            </div>
        </div>

    </form>

    @include ('errors')

    <form method="POST" action="/categories/{{ $category->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">刪除</button>
            </div>
        </div>
    </form>
@endsection
