<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";

    protected $fillable = [
        'name', 'taobao_url', 'taobao_price', 'main_image', 'stock_quantity'
    ];
}