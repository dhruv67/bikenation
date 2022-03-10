<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'image',
        'upc',
        'url',
        'details',
        'price',
        'stock',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];
}
