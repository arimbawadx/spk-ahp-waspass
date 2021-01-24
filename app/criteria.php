<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class criteria extends Model
{
    public function ahp_criteria()
    {
        return $this->hasMany('App\ahp_criteria');
    }
}
