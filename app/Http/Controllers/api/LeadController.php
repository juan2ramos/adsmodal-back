<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\api\LeadRequest;
use App\Http\Controllers\Controller;

class LeadController extends Controller
{
    public function store(LeadRequest $request)
    {
        return $request->createLead();
    }


}
