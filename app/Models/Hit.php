<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hit extends Model
{
    protected $fillable = ['cookie','ip','userAgent','fingerprint','page_request','page_referrer','action', 'code_google_analytics'];
}
