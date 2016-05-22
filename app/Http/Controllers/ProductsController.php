<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
class ProductsController extends Controller {
   /* public function procedures()
    {
        $procedures = Procedures::get();
        return view('pages.procedures', compact('procedures'));
    }*/


    public function index()
    {
        $products = DB::table('products')->groupBy('category')->get();

        return view('products.index', compact('products'));
    }

    public function categories($category)
    {
     
        $products = DB::table('products')->where('name', '=', urldecode($category))->get();
        $links      = $this->getCategory($products);


        return view('products.view', compact('products', 'links'));
    }

    public function getCategories($category)
    {
        $category =  DB::table('products')->where('category', '=', $category)->get(); 
        return view('products.view', compact('category'));       
    }

    public function getCategory($value)
    {
        return DB::table('products')->where('category', '=', $value[0]->category)->get();
    }
}
