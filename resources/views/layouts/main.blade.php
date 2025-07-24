<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <title>Pachara's Books Store - @yield('title')</title>
</head>

<body>
    <header>
        <h1>Pachara's Books Store - @yield('title')</span></h1>
        <nav>
            <a href="{{ route('products.list') }}">Products</a>
            <a href="{{ route('categories.list') }}">Categories</a>
        </nav>
    </header>
    <div class="app-cmp-content">
        @yield('content')
    </div>
    <footer>
        &#xA9; Copyright Week-03, 2025 your_name's Books Store.
    </footer>
</body>

</html>
