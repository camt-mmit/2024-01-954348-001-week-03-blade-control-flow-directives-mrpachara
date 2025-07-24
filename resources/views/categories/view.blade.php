@extends('layouts.main', [
    'title' => $category['name'],
])

@section('content')
    <main>
        <table class="app-cmp-data-list">
            <caption>Products List for <em>{{ $category['name'] }}</em></caption>
            <colgroup>
                <col style="width: 64px;" />
            </colgroup>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
                                alt="Image of {{ $product['name'] }}" class="app-cmp-product-image" />
                        </td>
                        <td>
                            <a
                                href="{{ route('products.view', [
                                    'product' => $product['code'],
                                ]) }}"><em>{{ $product['code'] }}<em></a>
                        </td>
                        <td>
                            <span>{{ $product['name'] }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
