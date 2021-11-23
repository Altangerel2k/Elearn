<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Questionnaire.
 *
 * @author  The scaffold-interface created at 2018-03-31 06:33:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Questionnaire extends Model
{

    protected $guarded=[];
    //
    public function childs()
    {
        return $this->hasMany(Question::class,'parent_id');
    }
    public function resultchilds()
    {
        return $this->hasMany(qresult::class,'parent_id');
    }

	
}
