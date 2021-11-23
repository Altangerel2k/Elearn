<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded=[];
    //
    public function childs()
    {
        return $this->hasMany(self::class,'group_id');
    }
    public function parent()
    {
        return $this->belongsTo(self::class,'group_id','id');
    }

    public function contentchilds()
    {
        return $this->hasMany(Content::class, 'parent_id');
    }
    public function mediachilds()
    {
        return $this->hasMany(Mediatb::class, 'parent_id');
    }
    public function recursiveBread()
    {
        return $this->parent()->with('recursiveBread');
    }

}
