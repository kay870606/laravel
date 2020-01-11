<div>
    {{ $product }}
    {!! QrCode::size(500)->generate($product); !!}
</div>
