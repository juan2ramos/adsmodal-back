<?php

namespace App\Http\Requests\api;

use App\Models\Customer;
use App\Models\Lead;
use App\Notifications\NewLead;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Notification;


class LeadRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

        ];
    }

    public function createLead()
    {
        $url = parse_url(url()->previous());
        //$customer = Customer::where('url', 'like', '%' . $url['host'])->firstOrFail();
        $customer = Customer::find(1);
        $data = $this->all();
        Lead::create([
            'cookie' => $this->get('cookie'),
            'ip' => $this->ip(),
            'page_request' => url()->previous(),
            'page_referrer' => $this->get('referrer'),
            'data' => json_encode($data),
            'customer_id' => $customer->id
        ]);

        $customer->notify(new NewLead($data));

        return ['asd', 'true'];
    }


}
