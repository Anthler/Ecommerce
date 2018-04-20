<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class frontController extends Controller
{
    public function index(){

      return view('front.home');
    }

    public function shirts(){
      $products = Product::all();
      return view('front.shirts', compact('products'));
    }

    public function contact(){
      return view('front.contact');
    }

    public function shirt(){
      return view('front.shirt');
    }
}
