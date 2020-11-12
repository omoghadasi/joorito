<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table='tbl_sites';

    protected $fillable = [
        'title', 'desc', 'url',
    ];

}
