<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    public function index(){
        $products = Product::take(6)->orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
       return view('product.index')
       ->with('products',$products)
       ->with('categories',$categories);

    }



    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product.show')->with('product',$product);
    }


  //  ******************* start one to many relation**********************
public function getCategory(){
   $categories = Category::all();
   return $categories;
}


  //  ******************* end one to many relation**********************
}
