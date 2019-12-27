@extends('layout')

@section('content')
    <h1 class="title">建立</h1>

    <form method="POST" action="/products" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label class="label">小分類</label>
            <div class="select">
                <select name="subcategory_id">
                    @foreach ($subcategories as $subcategory)
                        <option
                            value="{{$subcategory->id}}">{{$subcategory->category->number.'  '.$subcategory->category->name.' '.$subcategory->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">國際條碼</label>
            <div class="control">
                <input type="text" name="ean" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">名稱</label>
            <div class="control">
                <input type="text" name="name" class="input" required>
            </div>
        </div>


        <div class="field">
            <label class="label">價格</label>
            <div class="control">
                <input type="text" name="price" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">描述</label>
            <div class="control">
                <textarea class="textarea" name="description" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">規格</label>
            <div class="control">
                <textarea class="textarea" name="specification" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">圖片</label>
            <input type="file" name="image" required>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">建立</button>
            </div>
        </div>

        @include ('errors')
    </form>
@endsection
