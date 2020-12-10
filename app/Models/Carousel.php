<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $table="tbl_carousel";

    protected $fillable=[
        "id",
        "src",
        "title"
    ];
}
