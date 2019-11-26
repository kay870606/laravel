@extends('layout')

@section('content')
    <h1 class="title">Products</h1>

    <form method="GET" action="/products/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <div class="content">
        <ol type="1">
            @foreach ($products as $product)
                <li>
                    <a href="/products/{{ $product->id }}">
                        {{ $product->name }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

@endsection
