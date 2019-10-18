<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfoModel extends Model
{
    protected $fillable = [
        'userId','title', 'firstname', 'middlename','lastname','date','sex','nationality','nid',
    ];

}
