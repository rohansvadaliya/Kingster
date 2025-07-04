<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Warranty extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'warranty_records';

    protected $fillable = [
        'user_name', 'mobile_number', 'email', 'purchase_source', 'address', 'product_name', 'serial_number', 'purchase_date', 'expiry_date', 'warranty_status'
    ];
}
