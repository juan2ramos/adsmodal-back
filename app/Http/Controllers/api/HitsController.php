<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\HitRequest;


class HitsController extends Controller
{
    public function store(HitRequest $request)
    {
        return $request->createHit();
    }
}
