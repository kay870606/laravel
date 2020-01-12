@extends('layouts.management')

@section('content')
    <h1 class="title">編輯</h1>

    <form method="POST" action="/products/{{ $product->id }}" enctype="multipart/form-data" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">小分類</label>
            <div class="select">
                <select name="subcategory_id">
                    @foreach ($subcategories as $subcategory)
                        <option
                            value="{{$subcategory->id}}" {{ $subcategory->id == $product->subcategory_id ? 'selected' : ''}}>{{$subcategory->category->number.'  '.$subcategory->category->name.' '.$subcategory->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">國際條碼</label>
            <div class="control">
                <input type="text" name="ean" class="input" value="{{ $product->ean }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label">名稱</label>
            <div class="control">
                <input type="text" name="name" class="input" value="{{ $product->name }}" required>
            </div>
        </div>


        <div class="field">
            <label class="label">價格</label>
            <div class="control">
                <input type="text" name="price" class="input" value="{{ $product->price }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label">描述</label>
            <div class="control">
                <textarea class="textarea" name="description" required>{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">規格</label>
            <div class="control">
                <textarea class="textarea" name="specification" required>{{ $product->specification }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">圖片</label>
            <input type="file" name="image">
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">更新</button>
            </div>
        </div>

    </form>

    @include ('errors')

    <form method="POST" action="/products/{{ $product->id }}">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button">刪除</button>
            </div>
        </div>
    </form>
@endsection
