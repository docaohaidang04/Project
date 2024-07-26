<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'receiver_name',
        'receiver_phone',
        'receiver_address',
        'customer_name',
        'customer_email',
        'customer_address',
        'customer_phone',
        'status',
        'payment_method',
        'total_amount',


    ];
}
