<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Labels extends Model
{
    protected $table = "labels";

    protected $fillable = [
        'labelName'
    ];
}
