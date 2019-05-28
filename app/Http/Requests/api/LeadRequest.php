<?php

namespace App\Http\Requests\api;

use App\Models\Customer;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Lead;

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
        $customer = Customer::where('code', $this->get('code'))->first();
        $cookie = $this->checkCookie($this->get('cookie'));

        $customer->leads()->create([
            'cookie' => $cookie,
            'ip' => $this->ip(),
            'userAgent' => $this->userAgent(),
            'fingerprint' => $this->fingerprint(),
            'page-request' => url()->previous(),
            'page-referrer' => $this->get('referrer'),
            'action' => $this->get('action'),
            'code-google-analytics' => $this->get('gacid'),
        ]);
        return $this->data($cookie);
    }

    private function checkCookie($cookie)
    {
        return ($cookie) ?? unique_code('AAT-');
    }

    private function data($cookie)
    {
        return array(
            'cookie' => $cookie,
            'type' => 'form',
            'rules' =>
                array(
                    'pageViews' =>
                        array(
                            'all' => false,
                            'accepted' =>
                                array(
                                    array(
                                        'path'=>'/productos',
                                        'regex' => 'productos'
                                    ),
                                    array(
                                        'path'=>'/contacto/',
                                        'regex' => false
                                    )
                                ),
                        ),
                    'user' => true,
                ),
            'content' =>
                array(
                    0 =>
                    array(
                        'el' => 'span',
                        'attr' =>
                            array(
                                'id' => 'ModalAdsClose',
                            ),
                        'text' => 'Cerrar X',
                        'event' => 'click',
                        'callback' => 'document.querySelector("#ModalAds").remove()'
                    ),
                    1 =>
                        array(
                            'el' => 'img',
                            'attr' =>
                                array(
                                    'src' => 'https://www.ancla.la/wp-content/uploads/2019/05/imgheader.png',
                                    'width' => '410',
                                    'border' => 0,
                                ),
                            'text' => '',
                        ),
                    2 =>
                        array(
                            'el' => '#ModalAds-formContent',
                            'content' =>
                                array(
                                    0 =>
                                        array(
                                            'el' => 'h2',
                                            'attr' =>
                                                array(
                                                    'className' => 'is-text-center',
                                                ),
                                            'text' => '¿Sabes qúe caja fuerte es ideal para tu hogar, negocio u oficina?',
                                        ),
                                    1 =>
                                        array(
                                            'el' => 'p',
                                            'attr' =>
                                                array(
                                                    'className' => 'is-text-center',
                                                ),
                                            'text' => 'Llena el formulario con tus datos y recibe asesoria personalizada de uno de nuestros asesores',
                                        ),
                                    2 =>
                                        array(
                                            'el' => 'form',
                                            'attr' =>
                                                array(
                                                    'className' => 'Form',
                                                ),
                                            'text' => '',
                                            'content' =>
                                                array(
                                                    0 =>
                                                        array(
                                                            'el' => 'input',
                                                            'attr' =>
                                                                array(
                                                                    'placeholder' => 'Nombre',
                                                                    'required' => true,
                                                                    'name' => 'name',
                                                                    'rules' =>
                                                                        array(
                                                                            0 => 'required',
                                                                        ),
                                                                ),
                                                        ),
                                                    1 =>
                                                        array(
                                                            'el' => 'input',
                                                            'attr' =>
                                                                array(
                                                                    'type' => 'email',
                                                                    'placeholder' => 'E-mail',
                                                                    'required' => true,
                                                                    'name' => 'email',
                                                                    'rules' =>
                                                                        array(
                                                                            0 => 'required',
                                                                            1 => 'email',
                                                                        ),
                                                                ),
                                                        ),
                                                    2 =>
                                                        array(
                                                            'el' => 'input',
                                                            'attr' =>
                                                                array(
                                                                    'placeholder' => 'Número de contacto',
                                                                    'required' => true,
                                                                    'name' => 'number',
                                                                    'rules' =>
                                                                        array(
                                                                            0 => 'required',
                                                                        ),
                                                                ),
                                                        ),
                                                    3 =>
                                                        array(
                                                            'el' => 'div',
                                                            'attr' =>
                                                                array(
                                                                    'id' => 'content',
                                                                ),
                                                            'content' =>
                                                                array(
                                                                    0 =>
                                                                        array(
                                                                            'el' => 'input',
                                                                            'attr' =>
                                                                                array(
                                                                                    'id' => 'check',
                                                                                    'type' => 'checkbox',
                                                                                    'placeholder' => 'check',
                                                                                    'required' => true,
                                                                                    'rules' =>
                                                                                        array(
                                                                                            0 => 'required',
                                                                                        ),
                                                                                ),
                                                                        ),
                                                                    1 =>
                                                                        array(
                                                                            'el' => 'label',
                                                                            'attr' =>
                                                                                array(
                                                                                    'for' => 'check',
                                                                                    'className' => 'terms',
                                                                                ),
                                                                            'text' => 'Acepto las políticas de privacidad y los términos y condiciones.',
                                                                        ),
                                                                ),
                                                        ),
                                                    4 =>
                                                        array(
                                                            'el' => 'button',
                                                            'attr' =>
                                                                array(
                                                                    'type' => 'submit',
                                                                    'style' => 'background: red; color:white',
                                                                ),
                                                            'text' => 'Quiero la asesoría',
                                                        ),
                                                    5 =>
                                                        array(
                                                            'el' => 'input',
                                                            'attr' =>
                                                                array(
                                                                    'type' => 'hidden',
                                                                    'value' => $cookie,
                                                                    'name' => 'cookie'
                                                                ),
                                                            'text' => 'Quiero la asesoría',
                                                        ),
                                                ),
                                            'action' => 'https://api.artico.io/api/send',
                                        ),
                                ),
                        ),
                ),
        );
    }
}
