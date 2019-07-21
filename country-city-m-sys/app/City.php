<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    function country()
    {
        return $this->belongsTo(Country::class);
    }

}
