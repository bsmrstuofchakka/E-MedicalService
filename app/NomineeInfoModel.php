<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomineeInfoModel extends Model
{
    protected $fillable = [
        'userId', 'nname','nfname','nmname','nsname','nsex','ndate','nnationality','nnid','npaddress','npresentaddress','isign','nphoto',
    ];

}
