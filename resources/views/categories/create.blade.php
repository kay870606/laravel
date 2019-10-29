@extends('layout')

@section('content')
    <h1 class="title">Create a New Category</h1>

    <form method="POST" action="/categories">
        @csrf

        <div class="field">
            <label class="label">Category number</label>

            <div class="control">
                <input type="text" name="number" placeholder="Category number" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Category name</label>

            <div class="control">
                <input type="text" name="name" class="input" placeholder="Name">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Category</button>
            </div>
        </div>

        @include ('errors')
    </form>
@endsection
