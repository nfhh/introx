<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TerraMaster NAS.</title>
    <link rel="stylesheet" href="/css/front.css">
</head>
<body>

<main id="app">
    <div class="vd">
        <sidebar cur-product="{{ $cur_product_name }}" install-tip="{{ $install_tip }}" :content-len="1"></sidebar>
        <article>
            <div class="one">
                <div class="left">
                    <div class="left">
                        <?php
                        if ($sort === '1') {
                            $pre_sort = 1;
                        } else {
                            $pre_sort = $sort - 1;
                        }
                        if ($sort == $steps_count) {
                            $next_sort = $steps_count;
                        } else {
                            $next_sort = $sort + 1;
                        }
                        ?>
                        <a href="{{ substr_replace($_SERVER['REQUEST_URI'], $pre_sort, strrpos($_SERVER['REQUEST_URI'], '=')+1) }}">
                            <img src="/images/left.png" width="20" height="20">
                        </a>
                        <a href="{{ substr_replace($_SERVER['REQUEST_URI'], $next_sort, strrpos($_SERVER['REQUEST_URI'], '=')+1) }}">
                            <img src="/images/right.png" width="20" height="20">
                        </a>
                    </div>
                </div>
                <div class="right">

                </div>
            </div>
            @yield('content')
        </article>
    </div>
</main>

<script src="/js/app.js"></script>
</body>
</html>
