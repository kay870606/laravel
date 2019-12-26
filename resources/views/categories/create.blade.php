@extends('layout')

@section('content')

    <h1 class="title">建立</h1>

    <form method="POST" action="/categories">
        @csrf
    <table class="mistab">
        <tr>
            <td>編號</td>
            <td>
                <input type="text" name="number" class="input" required>
            </td>
        </tr>

        <tr>
            <td>名稱</td>
            <td>
                <input type="text" name="name" class="input">
            </td>
        </tr>
	</table>
		<div class="field">
            <div class="control">
                <button type="submit" class="button is-link">建立</button>
            </div>
        </div>
        @include ('errors')
    </form>


@endsection
