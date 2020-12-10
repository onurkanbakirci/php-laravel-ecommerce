<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table="tbl_product";

    protected $fillable=[
        "id",
        "src",
        "name",
        "category_id",
        "rock",
        "weight",
        "color",
        "stock",
        "price"
    ];
}
