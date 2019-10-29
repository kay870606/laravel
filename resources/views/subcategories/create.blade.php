@extends('layout')

@section('content')
    <h1 class="title">Create a New Subcategory</h1>

    <form method="POST" action="/subcategories">
        @csrf

        <div class="field">
            <label class="label">Subcategory number</label>
            <div class="control">
                <input type="text" name="number" placeholder="Subcategory number" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label" >Subcategory name</label>
            <div class="control">
                <input type="text" name="name" class="input" placeholder="Name">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Subcategory</button>
            </div>
        </div>

        @include ('errors')
    </form>
@endsection
