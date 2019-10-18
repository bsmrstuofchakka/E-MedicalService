<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInfoModel extends Model
{
    protected $fillable = [
         'userId','cnumber','email','fname','mname','paddress','contactEmergency','relationship',
    ];
}
