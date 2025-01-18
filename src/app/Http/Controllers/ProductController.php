<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Season;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products = Product::Paginate(6);
        return view('index', compact('products'));
    }

    public function search(Request $request)
    {
        $query = Product::query();

        $query = $this->keywordSearch($query, $request->keyword);

        $products = $query->paginate(6);

        return view('index', compact('products'));

    }

    public function register()
    {
        return view('register');
    }

    public function store(ProductRequest $request)
    {

    }

    public function edit($productId)
    {
        $product = Product::with('seasons')->find($productId);
        $seasons = Season::all();

        return view('edit', compact('product', 'seasons'));
    }

    public function update(ProductRequest $request, $productId)
    {
        $product = product::find($productId);
        // 途中・・・Productおよび中間テーブルへの登録？
    }

    private function keywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }

        return $query;
    }

}
