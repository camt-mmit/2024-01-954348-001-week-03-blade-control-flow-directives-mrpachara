@extends('layouts.main')

@section('title', 'Categories')

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
            <caption>Categories List</caption>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            <a
                                href="{{ route('categories.view', [
                                    'category' => $category['code'],
                                ]) }}"><em>{{ $category['code'] }}<em></a>
                        </td>
                        <td>
                            <span>{{ $category['name'] }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
