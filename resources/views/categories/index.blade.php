@extends('layout')

@section('content')
    <h1 class="title">Categories</h1>


    <form method="GET" action="/categories/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <div class="content">
        <ol type="1">
            @foreach ($categories as $category)
                <li>
                    <a href="/categories/{{ $category->id }}">
                        {{ $category->number .'   '.$category->name }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

@endsection
