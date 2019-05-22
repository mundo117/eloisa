<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUserDetailModel extends Model
{
    protected $table = 'tu_detail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_type_user','id_menu ','status',
    ];
}

