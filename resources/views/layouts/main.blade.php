<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/lec04-styles.css') }}" />

    <title>Pachara's Books Store - {{ $title }}</title>
</head>

<body>
    <header id="app-cmp-main-header">
        <h1>
            Pachara's Books Store –
            <span @class($titleClasses ?? [])>{{ $title }}</span>
        </h1>
        <nav>
            <ul class="app-cmp-links">
                <li>
                    <a href="{{ route('products.list') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('categories.list') }}">Categories</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="app-cmp-main-content">
        @yield('content')
    </div>

    <footer id="app-cmp-main-footer">
        &#xA9; Copyright Week-03, 2025 Pachara's Books Store.
    </footer>
</body>

</html>
