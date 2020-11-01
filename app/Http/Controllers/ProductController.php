<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Livewire\Component;

class ProductController extends Controller
{
    public function index()
    {	
    	$products = Product::paginate(25);

    	return view('index')
    	->with(compact('products'));
    }

    public function livewire()
    {
        return view('withlivewire');
    }
}
