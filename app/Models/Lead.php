<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['cookie','ip','userAgent','page-request','page-referrer','page-request_full', 'hit_id', 'data'];

}
