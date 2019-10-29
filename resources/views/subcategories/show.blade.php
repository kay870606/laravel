@extends('layout')

@section('content')
    <h1 class="title">{{ $category->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div>
        <p>{{ $category->number }}</p>

        <p> {{ $category->name }}</p>

        <p>
            <a href="/categories/{{ $category->id }}/edit">Edit</a>
        </p>
    </div>

@endsection
