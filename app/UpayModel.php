<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpayModel extends Model
{
    protected $fillable = [
        'date','deposite', 'description', 'amount','document','upload',
    ];
}
