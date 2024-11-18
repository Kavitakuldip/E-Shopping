<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'small_description',
        'description',
        'image',
        //'product_image',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'featured',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ] ;
    protected $casts = 
    [
        'status'=>'boolean',
        'trending'=>'boolean',
        'featured'=>'boolean',
        'product_image'=>'jason',
    ];
}
