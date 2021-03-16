<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    /**
    * get the model this belongs to
    */
 public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        "text"
    ];
}
