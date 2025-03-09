<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class MogitateController extends Controller
{
  public function index()
  {
    return view('index');
  }
  
  public function store(Request $request)
  {
    $products = $request->only(['name', 'price', 'image', 'season','description']);
    Products::create($products);
    return view('product_register');
  }

}