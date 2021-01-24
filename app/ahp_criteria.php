<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ahp_criteria extends Model
{
    public function criteria()
    {
        return $this->belongsTo('App\criteria', 'criterias_id');
    }
}
