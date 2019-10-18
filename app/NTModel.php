<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NTModel extends Model
{
    protected $fillable = [
        'date','deposite', 'description','document','upload',
    ];
}
