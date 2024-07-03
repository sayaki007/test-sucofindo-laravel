<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'mst_products';
    public $timestamps = false;

    protected $fillable = [
        'product_category_id',
        'name',
        'price',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category_id');
    }
}
