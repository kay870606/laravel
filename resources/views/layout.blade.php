<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>
<body>

{{--<div class="box">
    <a href="/">首頁</a>
    <a href="/categories">分類</a>
    <a href="/subcategories">小分類</a>
    <a href="/api/categories">api分類</a>
</div>--}}

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
            <a class="link is-info" href="/category-beacon">分類與Beacon</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/activities">活動</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/api/categories">api分類</a>
        </p>
    </nav>
</div>


<div class="container">
    @yield('content')
</div>

</body>
</html>
