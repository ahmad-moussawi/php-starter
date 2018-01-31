<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index() {

        $products = DB::table('products')->get();

        // return view('products.index', ['products' => $products]);
        return view('products.index', compact('products'));

    }

    function showCreate() {
        return view('products.create');
    }

    function create() {

        $this->validate(request(), [
            'name' => 'required',
            'price' => 'required',
            'color' => 'required',
        ]);

        $data = request(['name', 'description', 'price', 'color']);

        DB::table('products')->insert($data);

        return redirect('/products');

    }
}
