<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='tbl_user_role';
    public function users(){
        return $this->hasMany(User::class);
    }
}
