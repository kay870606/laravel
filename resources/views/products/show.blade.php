@extends('layout')

@section('content')
    <h1 class="title">{{ $product->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div class="content">
        <p>{{ $product->ean }}</p>

        <p>{{ $product->name }}</p>

        <p>{{ $product->price }}</p>

        <p>{{ $product->description }}</p>

        <p>{{ $product->specification }}</p>

        <figure class="image is-128x128">
            <img src="{{  $product->url  }}">
        </figure>

        <form method="GET" action="/products/{{ $product->id }}/edit">
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Edit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
