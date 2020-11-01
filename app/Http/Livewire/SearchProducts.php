<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class SearchProducts extends Component
{	
	public $search = '';

    public function render()
    {
        return view('livewire.search-products', [
            'products' => Product::where('title', 'LIKE', "%{$this->search}%")->get(),
        ]);
    }
}
