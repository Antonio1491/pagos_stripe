<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View ;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::paginate(9);

        return  view('products.index', compact( 'products'));
    }
}
