<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $product = new Product;
        $product->name = 'God of War';
        $product->price = 40;

        $product->save();
        $product = new Product;

        $product->name = 'football';
        $product->price = 50;

        $product->save();

        $category = Category::find([3, 4]);
        $product->categories()->attach($category);

        return 'Success';
    }


    public function show(Product $product)
{
   dd($product);
   return view('products.show', compact('product'));
}
    //
}
