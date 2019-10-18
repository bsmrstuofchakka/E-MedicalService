<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostModel extends Model
{
    protected $fillable = [
        'description', 'month', 'amount','document','upload',
    ];
}
