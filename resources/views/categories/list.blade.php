@extends('layouts.main', [
    'title' => 'Cagtegories',
])

@section('content')
     <main>
        <table class="app-cmp-data-list">
            <caption>Categories List</caption>
            <colgroup>
                <col style="width: 64px;" />
            </colgroup>
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
