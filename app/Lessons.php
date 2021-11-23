<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment.
 *
 * @author  The scaffold-interface created at 2018-03-28 07:48:09pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Lessons extends Model
{

    protected $guarded=[];
    //
    // public function childs()
    // {
    //     return $this->hasMany(self::class,'parent_id');
    // }
	
}
