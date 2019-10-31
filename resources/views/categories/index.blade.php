@extends('layout')

@section('content')
    <h1 class="title">Categories</h1>

    <ol>
        @foreach ($categories as $category)
            <li>
                <a href="/categories/{{ $category->id }}">
                    {{ $category->number .'   '.$category->name }}
                </a>
            </li>
        @endforeach
    </ol>

    <form method="GET" action="/categories/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

@endsection
