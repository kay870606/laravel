@extends('layouts.management')

@section('content')

    <h1 class="title">QR Code</h1>

    <div class="box">

        <div class="select">
            <select onChange="location = this.options[this.selectedIndex].value;">
                @foreach ($products as $product)
                    <option value="{{route('product-qr-code.show',$product->id)}}" {{ $product->id == $id ? 'selected' : ''}}>{{$product->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="container">
            {!! QrCode::size(500)->generate($productUrl); !!}
        </div>

        <div class="container">
            {{ $productUrl }}
        </div>

    </div>
@endsection
