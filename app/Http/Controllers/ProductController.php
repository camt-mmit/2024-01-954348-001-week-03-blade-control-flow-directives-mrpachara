<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    const PRODUCTS = [
        'BK001' => [
            'code' => 'BK001',
            'catCode' => 'CT001',
            'name' => 'Programming PHP'
        ],
        'BK002' => [
            'code' => 'BK002',
            'catCode' => 'CT002',
            'name' => 'JavaScript: The Definitive Guide'
        ],
        'BK003' => [
            'code' => 'BK003',
            'catCode' => 'CT001',
            'name' => 'Learning PHP, MySQL & JavaScript'
        ],
        'BK004' => [
            'code' => 'BK004',
            'catCode' => 'CT003',
            'name' => 'Python Crash Course, 2nd Edition'
        ],
    ];

    function list(): View
    {
        return view('products.list', [
            'products' => self::PRODUCTS,
        ]);
    }

    function view(string $productCode): View
    {
        return view('products.view', [
            'product' => self::PRODUCTS[$productCode],
        ]);
    }
}
