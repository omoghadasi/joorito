<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table='tbl_sites';

    protected $fillable = [
        'title', 'desc', 'url','connection_type','public_key','private_key',
    ];

    public function links(){
        return $this->hasMany(Link::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
