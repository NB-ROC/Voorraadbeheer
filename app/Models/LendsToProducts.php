<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LendsToProducts extends Model
{
    protected $table = "lends_products";

    protected $fillable = [
        'productID',
        'quantity'
    ];
}
