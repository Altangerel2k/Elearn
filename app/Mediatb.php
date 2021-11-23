<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mediatb extends Model
{
    protected $guarded=[];
    public function parent()
    {
        return $this->belongsTo(Group::class);
    }
}
