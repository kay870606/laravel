@extends('layout')

@section('content')
    <h1 class="title">Subcategories</h1>

    <form method="GET" action="/subcategories/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <ol>
        @foreach ($subcategories as $subcategory)
            <li>
                <a href="/subcategories/{{ $subcategory->id }}">
                    {{ $subcategory->category->number .'  '.$subcategory->name }}
                </a>
            </li>
        @endforeach
    </ol>

@endsection
