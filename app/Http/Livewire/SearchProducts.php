<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class SearchProducts extends Component
{	
	public $product_id = '';

    public function render()
    {
        return view('livewire.search-products', [
            'products' => Product::where('id', $this->product_id )->get(),
            'product_id' => $this->product_id
        ]);
    }

}
