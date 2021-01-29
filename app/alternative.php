<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alternative extends Model
{
    public function ahp_alternative()
    {
        return $this->hasMany('App\ahp_alternative');
    }
}
