<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //buat index
    public function index(){
        //ambil data
        $data = Product::all();
        return view('index', compact('data'));
    }
}
