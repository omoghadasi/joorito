<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

    protected $table='tbl_links';
    protected $fillable = [
        'title', 'desc', 'url','img_url'
    ];

    public function site(){
        return $this->belongsTo(Site::class);
    }
}
