@extends('layouts.management')

@section('content')


    <div align="center">
        <h1 class="title">建立</h1>

        <form method="POST" action="/categories">
            @csrf

            <div class="table-container">
                <table class="table is-bordered is-striped is-narrow is-hoverable ">
                    <tbody>
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
                    </tbody>
                </table>
            </div>

            <div class="field">
                    <button type="submit" class="button is-link">建立</button>
            </div>

            @include ('errors')
        </form>
    </div>

@endsection
