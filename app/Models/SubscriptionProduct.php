<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_title',
        'product_description',
        'product_price',
        'product_price_fix_discount',
        'product_price_percentage_discount',
        'product_tag',
        'product_thumb_image',
        'product_gallery',
        'product_quantity',
        'product_color',
        'product_sku',
        'product_category',
    ];

    protected $casts = [
        'product_gallery' => 'array',
        'product_color' => 'array',
    ];

    
    protected $table = 'subscription_products';
}
