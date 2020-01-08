@extends('layouts.management')

@section('content')
    <h1 class="title">編輯</h1>

    <form method="POST" action="/activities/{{ $activity->id }}" enctype="multipart/form-data" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">名稱</label>
            <div class="control">
                <input type="text" name="name" class="input" value="{{ $activity->name }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label">圖片</label>
            <input type="file" name="image" required>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">更新</button>
            </div>
        </div>

    </form>

    @include ('errors')

    <form method="POST" action="/activities/{{ $activity->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">刪除</button>
            </div>
        </div>
    </form>
@endsection
