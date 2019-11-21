@extends('layout')

@section('content')
    <h1 class="title">{{ $categoryActivity->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div class="content">
        <p>{{ $categoryActivity->category->number }}</p>

        <p>{{ $categoryActivity->category->name }}</p>

        <p>{{ $categoryActivity->name }}</p>

        <figure class="image is-128x128">
            <img src="{{  $categoryActivity->url  }}">
        </figure>

        <form method="GET" action="/category-activities/{{ $categoryActivity->id }}/edit">
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Edit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
