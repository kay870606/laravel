@extends('layouts.management')

@section('content')

    <h1 class="title">編輯</h1>

    <form method="POST" action="/category-beacons/{{ $categoryBeacon->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">大分類</label>
            <div class="select">
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option
                            value="{{$category->id}}" {{ $category->id == $categoryBeacon->category_id ? 'selected' : ''}}>{{$category->number.' '.$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">Beacon</label>
            <div class="select">
                <select name="beacon_id">
                    @foreach ($beacons as $beacon)
                        <option
                            value="{{$beacon->id}}" {{ $beacon->id == $categoryBeacon->$beacon_id ? 'selected' : ''}}>{{$beacon->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">更新</button>
            </div>
        </div>
    </form>

    @include ('errors')

    <form method="POST" action="/category-beacons/{{ $categoryBeacon->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">刪除</button>
            </div>
        </div>
    </form>

@endsection
