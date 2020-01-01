<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>賣場管理系統</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<style>
    #rectangle {
        background-image: url("http://140.129.25.76:8000/storage/management/Rectangle 2.png");
    }

    table.grid td {
        border: 0px solid white;
        border-collapse: collapse;
        background-color: rgb(227,232,255);
        padding: 10px 8px;
    }
    table.grid td:first-child {
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    table.grid td:last-child {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }

</style>
<body>

@auth
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf

        <nav class="navbar">
            <div class="navbar-menu is-active">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="controller">
                            <button class="button is-link">登出</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        {{--<div class="columns is-mobile">
            <div class="column is-1 is-offset-8">
                <div class="control">
                    <button class="button is-link">登出</button>
                </div>
            </div>
        </div>--}}
    </form>
@endauth
<div class="container">
    <table class="grid">
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
        <td class="level-item has-text-centered">
            <a class="link is-info" href="/keywords">關鍵字管理</a>
        </td>
    </table>
</div>


<div class="container">
    <nav class="level">
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/">首頁</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/categories">商品管理(大分類)</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/subcategories">商品管理(小分類)</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/beacons">貨架位置(Beacon)</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/category-beacons">貨架位置(分類)</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/activities">活動管理</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/category-activities">推播管理</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/products">商品管理</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/keywords">關鍵字管理</a>
        </p>
    </nav>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>
