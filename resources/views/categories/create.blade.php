@extends('layout')

@section('content')
    <h1 class="title">Create a New Category</h1>

    <form method="POST" action="/categories">
        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="title">Category number</label>

            <div class="control">
                <input type="text" name="number" placeholder="Category number" class="input {{ $errors->has('number') ? 'is-danger' : '' }}" value="{{ old('number') }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Category name</label>

            <div class="control">
                <textarea name="name" placeholder="Category name" class="textarea {{ $errors->has('name') ? 'is-danger' : '' }}" required>{{ old('name') }}</textarea>
                {{--<input type="text" name="name" class="input" placeholder="Name" value="{{ $category->name }}">--}}
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
