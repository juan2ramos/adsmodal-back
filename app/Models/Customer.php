<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

}
