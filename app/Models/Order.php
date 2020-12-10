<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table="tbl_order";

    protected $fillable=[
        'id',
        'order_id',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_email',
        'shipping_phone_number',
        'shipping_address_1',
        'shipping_address_2',
        'shipping_country',
        'shipping_state',
        'shipping_city',
        'shipping_zip_code',

        'billing_first_name',
        'billing_last_name',
        'billing_email',
        'billing_phone_number',
        'billing_address_1',
        'billing_address_2',
        'billing_country',
        'billing_state',
        'billing_city',
        'billing_zip_code'
    ];
            
}
