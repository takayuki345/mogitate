<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    private function keywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }

        return $query;
    }

}
