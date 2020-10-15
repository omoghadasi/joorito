<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table='tbl_users_profile';
    protected $fillable = ['user_id','fname', 'lname', 'address', 'ostan', 'shahr','phone','about_me'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
