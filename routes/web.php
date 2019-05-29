<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('algo', function () {
    $customer = App\Models\Customer::find(1);
    $customer->notify(new \App\Notifications\NewLead(['asdas' => 'asdasd']));
});
