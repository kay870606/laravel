@extends('layouts.management')

@section('content')
    <h1 class="title">建立</h1>

    <form method="POST" action="/keywords">
        @csrf

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
