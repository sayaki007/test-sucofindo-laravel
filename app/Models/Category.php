<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'mst_category';

    protected $fillable = [
        'category_name',
    ];
}