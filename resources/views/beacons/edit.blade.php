@extends('layout')

@section('content')
    <h1 class="title">編輯</h1>

    <form method="POST" action="/beacons/{{ $beacon->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">名稱</label>
            <div class="control">
                <input type="text" name="name" class="input" value="{{ $beacon->name }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Mac</label>
            <div class="control">
                <input type="text" name="mac" class="input" value="{{ $beacon->mac }}" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">更新</button>
            </div>
        </div>

    </form>

    @include ('errors')

    <form method="POST" action="/beacons/{{ $beacon->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">刪除</button>
            </div>
        </div>
    </form>
@endsection
