@extends('layout')

@section('content')
    <h1 class="title">Subcategories</h1>

    <ol>
        @foreach ($subcategories as $subcategory)
            <li>
                <a href="/subcategories/{{ $subcategory->id }}">
                    {{ $subcategory->number .'  '.$subcategory->name }}
                </a>
            </li>
        @endforeach
    </ol>

    <form method="GET" action="/subcategories/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

@endsection
