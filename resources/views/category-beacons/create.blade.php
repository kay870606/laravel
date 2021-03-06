@extends('layouts.management')

@section('content')
    <h1 class="title">建立</h1>

    <form method="POST" action="/category-beacons">
        @csrf

        <div class="field">
            <label class="label">大分類</label>
            <div class="select">
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->number.'  '.$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">Beacon</label>
            <div class="select">
                <select name="beacon_id">
                    @foreach ($beacons as $beacon)
                        <option value="{{$beacon->id}}">{{$beacon->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">建立</button>
            </div>
        </div>

        @include ('errors')
    </form>

@endsection
