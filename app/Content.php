<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $guarded=[];
    public function parent()
    {
        return $this->belongsTo(Group::class);
    }
}
