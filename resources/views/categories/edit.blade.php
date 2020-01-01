@extends('layouts.management')

@section('content')
    <h1 class="title">編輯</h1>

    <form method="POST" action="/categories/{{ $category->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <tbody>
                <tr>
                    <td>編號</td>
                    <td>
                        <input type="text" name="number" class="input" value="{{ $category->number }}" required>
                    </td>
                </tr>
                <tr>
                    <td>名稱</td>
                    <td>
                        <input type="text" name="name" class="input" value="{{ $category->name }}">
                    </td>
                </tr>
                </tbody>
            </table>
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
