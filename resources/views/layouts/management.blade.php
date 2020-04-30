@extends('layouts.layout')

@section('contents')

    <div class="container" align="center" style="width:100%;">
        <table class="grid" style="width:100%;">
            <td>
                <a class="link is-info" href="/">首頁</a>
            </td>
            <td>
                <a class="link is-info" href="/categories">商品管理(大分類)</a>
            </td>
            <td>
                <a class="link is-info" href="/subcategories">商品管理(小分類)</a>
            </td>
            <td>
                <a class="link is-info" href="/beacons">貨架位置(Beacon)</a>
            </td>
            <td>
                <a class="link is-info" href="/category-beacons">貨架位置(分類)</a>
            </td>
            <td>
                <a class="link is-info" href="/activities">活動管理</a>
            </td>
            <td>
                <a class="link is-info" href="/category-activities">推播管理</a>
            </td>
            <td>
                <a class="link is-info" href="/products">商品管理</a>
            </td>
            <td>
                <a class="link is-info" href="/keywords">關鍵字管理</a>
            </td>
            <td>
                <a class="link is-info" href="/product-qr-code">QR Code</a>
            </td>
            <td>
                <a class="link is-info" href="/subcategory-counter">小分類點擊次數</a>
            </td>
            <td>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="controller">
                        <a href="javascript:;" onclick="logout();">登出</a>
                    </div>
                </form>
            </td>
        </table>
    </div>

    <div class="container">
        @yield('content')
    </div>
@endsection
