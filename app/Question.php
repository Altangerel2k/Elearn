<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question.
 *
 * @author  The scaffold-interface created at 2018-04-01 12:48:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Question extends Model
{



//    protected $casts = [
//        'answers' => 'array',
//    ];
    public function parent()
    {
        return $this->belongsTo(Questionnaire::class);
    }

	
}
