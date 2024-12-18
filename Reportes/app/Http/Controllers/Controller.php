<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Category;

class Controller extends BaseController
{
    public function nameandCategory(){
       // $products = Product::all()->only('name','category_id');ç
        $products = Product::all()->load('category');
        return $products;


    }
    public function orderByPrice(){
        $products = Product::all()->sortBy('price');
        return $products;
    }

    public function stock_0(){
        $products = Product::where('stock','=',0)->get();
        return $products;

    }
    public function stock_10(){
        $products = Product::where('stock','>=',10)->get();
        return $products;

    }
}
