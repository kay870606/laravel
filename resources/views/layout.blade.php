<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>賣場管理系統</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
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
    <nav class="level">
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/">首頁</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/categories">大分類</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/subcategories">小分類</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/beacons">Beacon</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/category-beacons">大分類與Beacon</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/activities">活動</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/category-activities">大分類與活動</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/products">商品</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/keywords">關鍵字</a>
        </p>
    </nav>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>
