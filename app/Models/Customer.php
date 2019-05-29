<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public function hits()
    {
        return $this->hasMany(Hit::class);
    }

}
