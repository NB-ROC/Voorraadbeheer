<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lends extends Model
{
    protected $table = "lends";

    protected $fillable = [
        'usersID',
        'orderDate',
        'lendStatus'
    ];

}
