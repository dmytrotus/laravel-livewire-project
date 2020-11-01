<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Price;

class Product extends Model
{
    use HasFactory;

    public function price(){

    	$price = $this->hasOne(Price::class);

    	return $price;
    }
}
