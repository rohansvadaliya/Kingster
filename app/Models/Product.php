<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'index',
        'product_name',
        'offer_price',
        'original_price',
        'features',
        'rating',
        'review_count',
        'sold_count',
        'description',
        'default_img',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'img_5',
        'img_6',
        'img_7',
        'img_8',
        'img_9',
        'img_10',
        'is_variant',
        'variant_1_name',
        'variant_1_price',
        'variant_1_oprice',
        'variant_1_offer',
        'variant_2_name',
        'variant_2_price',
        'variant_2_oprice',
        'variant_2_offer',
        'variant_3_name',
        'variant_3_price',
        'variant_3_oprice',
        'variant_3_offer',
        'created_by',
        'modified_by',
        'status',
        'is_deleted'
    ];
}
