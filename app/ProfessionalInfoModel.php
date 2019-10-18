<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalInfoModel extends Model
{

    protected $fillable = [
       'userId', 'ladegree','specialization','cdesignation','affiliation','parmaddress','fdesignation','oline1','oline2',
    ];


}
