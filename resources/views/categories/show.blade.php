@extends('layout')

@section('content')
    <h1 class="title">{{ $category->id }}</h1>

    {{-- @can('update', $project)
        <a href="">Update</a>
    @endcan --}}

    <div>
        <p>{{ $category->number }}</p>

        <p> {{ $category->name }}</p>

        <p>
            <a href="/categories/{{ $category->id }}/edit">Edit</a>
        </p>
    </div>

    @if ($category->subcategories->count())
        <div class="box">
            @foreach ($category->subcategories as $subcategory)
                <div>
                    {{--<form method="POST" action="/completed-tasks/{{ $task->id }}">
                        @if ($task->completed)
                            @method('DELETE')
                        @endif

                        @csrf

                        <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>--}}
                    {{ $subcategory->name }}
                </div>
            @endforeach
        </div>
    @endif

    {{-- add a new task form --}}
    <form method="POST" action="/categories/{{ $category->id }}/subcategories" class="box">
        @csrf

        <div class="field">
            <label for="description" class="label">New Subcategory</label>

            <div class="control">
                <input type="text" name="name" placeholder="Name" class="input" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Subcategory</button>
            </div>
        </div>

        @include ('errors')
    </form>

@endsection
