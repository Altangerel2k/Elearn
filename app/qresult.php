<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qresult extends Model
{
    //
    public function parent()
    {
        return $this->belongsTo(Questionnaire::class);
    }
//  public function getResultAttribute($value)
//  {
//      return json_decode(unserialize($value),true);
//  }
}
