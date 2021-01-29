<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ahp_alternative extends Model
{
    public function alternative()
    {
        return $this->belongsTo('App\alternative', 'alternatives_id');
    }
}
