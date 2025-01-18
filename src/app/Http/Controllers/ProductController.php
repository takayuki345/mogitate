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

        dd($request->all());
        $product = [
            'name' => $request->name,
            'price' => $request->price,
            'image' => 'img/' . $request->image,
            'description' => $request->description
        ];

        $product = Product::create($product);

        $product->seasons()->attach($request->season);

        return redirect('/products');
    }

    public function edit($productId)
    {
        $product = Product::with('seasons')->find($productId);
        $seasons = Season::all();

        return view('edit', compact('product', 'seasons'));
    }

    public function update(ProductRequest $request, $productId)
    {
        
        $product = Product::find($productId)->update(
            [
                'name' => $request->name,
                'price' => $request->price,
                'image' => 'img/' . $request->image,
                'description' => $request->description
            ]
        );

        $product = Product::find($productId);
        $product->seasons()->sync($request->season);

        return redirect('/products');
    }

    private function keywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }

        return $query;
    }

}
