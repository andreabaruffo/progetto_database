<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create (){
        return view('product.create');
    }

    public function store(Request $request){
        

        $name = $request->input('name');
        $brand = $request->input('brand');
        $description = $request->input('description');
        $price = $request->input('price');
        

        // $product = new Product();
        // $product->name =$name;
        // $product->brand =$brand;
        // $product->description =$description;
        // $product->price =$price;
        // $product->save();
        // dd($product);

        Product::create(
            [
                'name'=>$name,
                'description'=>$description,
                'price'=>$price,
                'brand'=>$brand,

            ]
        );
        return redirect ()->route('homepage')->with('message', 'Il tuo articolo è stato pubblicato');
    }

    public function getProductByBrand($brand){
        $products = Product::where('brand', $brand)->get();
        return view ('product/brand', compact('products'));
    }
}
