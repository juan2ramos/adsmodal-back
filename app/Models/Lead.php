<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['cookie','ip','userAgent','page_request','page_referrer', 'data'];

}
