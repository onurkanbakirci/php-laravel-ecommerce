<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = "tbl_message";

    protected $fillabe=[
        "id",
        "sender_email",
        "message"
    ];
}
