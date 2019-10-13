@extends('layout')

@section('content')
    <h1 class="title">Categories</h1>

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <ol>
        @foreach ($categories as $category)
            <li>
                <a href="/categories/{{ $category->id }}">
                    {{ $category->number .$category->name }}
                </a>
            </li>
        @endforeach
    </ol>
@endsection
