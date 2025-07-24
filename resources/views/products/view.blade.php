@extends('layouts.main', [
    'title' => $product['name'],
])

@section('content')
    <main>
        <div>
            <img src="{{ asset("images/products/{$product['code']}.jpg") }}" alt="Image of {{ $product['name'] }}" />
        </div>

        <dl class="app-cmp-data-detail">
            <dt>Code</dt>
            <dd>
                <em>{{ $product['code'] }}</em>
            </dd>

            <dt>Category</dt>
            <dd>
                <a
                    href="{{ route('categories.view', [
                        'category' => $category['code'],
                    ]) }}">
                    <em style="color: blue;">{{ $category['name'] }}</em>
                </a>
            </dd>

            <dt>Name</dt>
            <dd>
                <span>{{ $product['name'] }}</span>
            </dd>
        </dl>

        <pre>{{ $product['description'] }}</pre>
    </main>
@endsection
