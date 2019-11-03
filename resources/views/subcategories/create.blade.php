@extends('layout')

@section('content')
    <h1 class="title">Create a New Subcategory</h1>

    <form method="POST" action="/subcategories">
        @csrf

        <div class="field">
            <label class="label">Category</label>
            <div class="select">
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->number.'  '.$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">Subcategory name</label>
            <div class="control">
                <input type="text" name="name" class="input" placeholder="Name" required>
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
