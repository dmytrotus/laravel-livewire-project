<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {	
    	$products = [1,2,4,3,4,5,6,7,7];

    	return view('index')
    	->with(compact('products'));
    }
}
