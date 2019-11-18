@extends('layout')

@section('content')
    <h1 class="title">{{ $category->id }}</h1>

    <div class="content">
        <p>{{ $category->number }}</p>

        <p>{{ $category->name }}</p>

        <form method="GET" action="/categories/{{ $category->id }}/edit">
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Edit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
