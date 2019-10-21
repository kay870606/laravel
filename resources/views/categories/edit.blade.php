@extends('layout')

@section('content')
    <h1 class="title">Edit Category</h1>

    <form method="POST" action="/categories/{{ $category->id }}" style="margin-bottom: 1em;">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="title">Number</label>

            <div class="control">
                <input type="text" name="number" class="input" placeholder="Number" value="{{ $category->number }}">
            </div>

            <div class="field">
                <label class="label" for="description">Name</label>

                <div class="control">
                    <input type="text" name="name" class="input" placeholder="Name" value="{{ $category->name }}">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update Category</button>
                </div>
            </div>
        </div>
    </form>

    @include ('errors')

    <form method="POST" action="/categories/{{ $category->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Category</button>
            </div>
        </div>
    </form>
@endsection
