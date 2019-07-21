<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    function cities()
    {
        return $this->hasMany(City::class);
    }

}
