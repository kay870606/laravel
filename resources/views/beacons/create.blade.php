@extends('layout')

@section('content')
    <h1 class="title">Create a New Beacon</h1>

    <form method="POST" action="/beacons">
        @csrf

        <div class="field">
            <label class="label">Beacon number</label>

            <div class="control">
                <input type="text" name="name" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Beacon mac</label>

            <div class="control">
                <input type="text" name="mac" class="input" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Beacon</button>
            </div>
        </div>

        @include ('errors')
    </form>

@endsection
