<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function welcome(){
        $produits = Product::get();
        // $produits = DB::table('products')
        // ->paginate(1);
        // //->orderBy('product_name', 'asc')
        // // ->get();
        return view('pages.welcome')->with('produits', $produits);
    }
}
