@extends('layout')

@section('content')
    <h1 class="title">Edit Category</h1>

    <form method="POST" action="/activities/{{ $activity->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" name="name" class="input" placeholder="Name" value="{{ $activity->name }}"
                       required>
            </div>
        </div>

        <div class="field">
            <input type="file" name="image">
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Activity</button>
            </div>
        </div>

    </form>

    @include ('errors')

    <form method="POST" action="/activities/{{ $activity->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Activity</button>
            </div>
        </div>
    </form>
@endsection
