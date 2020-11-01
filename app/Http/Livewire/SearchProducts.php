<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class SearchProducts extends Component
{	
	use WithPagination;

	public $search = '';

    public function render()
    {	
    	//sleep(1);
        return view('livewire.search-products', [
            'productswire' => Product::search('title', $this->search)->paginate(5),
            'searchphrase' => $this->search
        ]);
    }


}
