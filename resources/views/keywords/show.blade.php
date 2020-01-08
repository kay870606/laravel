@extends('layouts.management')

@section('content')

    <h1 class="title">顯示</h1>

    <form method="GET" action="/keywords/{{ $keyword->id }}/edit" style="margin-bottom: 1em;">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">編輯</button>
            </div>
        </div>
    </form>

    <form method="GET" action="/keywords/{{ $keyword->id }}/mappings/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">建立對應</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table">
			<tr>
				<th>名稱</th>
				<td colspan="2" style="text-align: center;">{{ $keyword->name }}</td>
			</tr>
            @foreach ( $keyword->keywordMappings as $keywordMapping)
                <tr>
                    <th style="border:1px solid black;">對應商品</th>
                    <td style="border:1px solid black;">{{$keywordMapping->name}}</td>
                    <td style="border:1px solid black;">
                        <form action="/keywords/{{ $keyword->id }}/mappings/{{ $keywordMapping->id }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button">刪除</button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
