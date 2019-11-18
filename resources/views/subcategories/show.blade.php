@extends('layout')

@section('content')
    <h1 class="title">{{ $subcategory->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div class="content">
        <p>{{ $subcategory->category->number }}</p>

        <p>{{ $subcategory->category->name }}</p>

        <p>{{ $subcategory->name }}</p>

        <form method="GET" action="/subcategories/{{ $subcategory->id }}/edit">
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Edit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
