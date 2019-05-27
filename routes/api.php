<?php

Route::post('get-info-initial', function (\App\Http\Requests\api\LeadRequest $request){
    $lead = new \App\Http\Controllers\api\LeadController();
    return $lead->store($request);
});
Route::get('/', function (){
    return 'asdas';
});
