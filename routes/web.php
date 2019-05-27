<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('algo', function () {

    $customer = \App\Models\Customer::where('code', 'AA-f3o0w2x7')->first();

    $customer->leads()->create([
        'cookie' =>  "pageview",
        'ip' => "AAT-o7a7v20t",
        'userAgent' => "cbff8f0a2bdf56b7a9daf4844c62a04c67fbab50",
        'fingerprint' => "127.0.0.1",
        'page-request' => "http://localhost:9000/",
        'page-referrer' => "http://localhost:9000/",
        'action' => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36"

    ]);
});
