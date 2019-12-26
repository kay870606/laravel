<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>賣場管理系統</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>
        th {
            font-family: Arial, MingLiU, sans-serif;
            font-size: 1em;
            font-weight: bold;
            background: #D0F5A9;
        }

        td {
            font-family: Arial, MingLiU, sans-serif;
            font-size: 1em;
        }

        table.mistab {
            border-width: 1px;
            border-style: outset;
            border-color: #330066;
            border-collapse: collapse;
            width: 100%;
        }

        table.mistab th {
            border-width: 1px;
            padding: 2px;
            border-style: inset;
            border-color: #330066;
        }

        table.mistab td {
            border-width: 1px;
            padding: 2px;
            border-style: inset;
            border-color: #330066;
        }
    </style>
</head>
<body>

<div class="container">
    <nav class="level">
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/">首頁</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/categories">分類</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/subcategories">小分類</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/beacons">Beacon</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/category-beacons">分類與Beacon</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/activities">活動</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/category-activities">分類與活動</a>
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
