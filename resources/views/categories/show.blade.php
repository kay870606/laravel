@extends('layout')

@section('content')
    <h1 class="title">{{ $category->number }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div>
        {{ $category->name }}

        <p>
            <a href="/categories/{{ $category->id }}/edit">Edit</a>
        </p>
    </div>

@endsection
