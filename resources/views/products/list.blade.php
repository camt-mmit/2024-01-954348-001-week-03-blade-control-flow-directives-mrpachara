@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        .app-cmp-product-image {
            width: 64px;
        }
    </style>

    <main>
        <table>
            <caption>Products List</caption>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Category</th>
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
                            <em>{{ $product['catCode'] }}</em>
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
