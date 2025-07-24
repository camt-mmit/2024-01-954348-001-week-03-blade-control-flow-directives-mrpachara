<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CategoryController extends Controller
{
    const CATEGORIES = [
        'CT001' => ['code' => 'CT001', 'name' => 'PHP'],
        'CT002' => ['code' => 'CT002', 'name' => 'JavaScript'],
        'CT003' => ['code' => 'CT003', 'name' => 'Python'],
    ];

    function list(): View
    {
        return view('categories.list', [
            'categories' => self::CATEGORIES,
        ]);
    }

    function view(string $categoryCode): View
    {
        $category = self::CATEGORIES[$categoryCode];

        return view('categories.view', [
            'category' => $category,
            'products' => \array_filter(
                ProductController::PRODUCTS,
                static function(array $product) use ($category) {
                    return $product['catCode'] === $category['code'];
                }),
        ]);
    }
}
