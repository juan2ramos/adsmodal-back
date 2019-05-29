<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hit extends Model
{
    protected $fillable = ['cookie','ip','userAgent','fingerprint','page-request','page-referrer','action', 'code-google-analytics'];
}
