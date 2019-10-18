<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FolderModel extends Model
{
    protected $fillable = [
        'date','title', 'description', 'upload',
    ];
}
