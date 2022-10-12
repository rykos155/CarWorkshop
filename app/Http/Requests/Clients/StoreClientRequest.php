<?php

namespace App\Http\Requests\Clients;

use App\Models\Client;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class StoreClientRequest extends FormRequest
    {
        /**
        *
        *REGUŁY WALIDACJI
        * @return array
        */

        public function rules()
        {
            Validator::extend('unique pesel',
                function ($attribute, $value, $parameters, $validator) {
                    //$result = Client::withTrashed()->where('pesel', $value)->count();
                    $result = Client::where('pesel', $value)->count();
                    return $result === 0;
                },
                __('Posiadasz już klienta z takim peselem.', ['pesel' => $this->pesel])  
            );
            
            return [
                'imię' => [
                    'required',
                    'string',
                    'alpha',
                    'max:60'
                ],
                'nazwisko' => [
                    'required',
                    'string',
                    'alpha',
                    'max:60'
                ],
                'pesel' => [
                    'numeric',
                    'digits:11',
                    'unique_pesel',
                    'nullable'
                ],
                'telefon' => [
                    'required',
                    'digits:9',
                    'numeric'
                ],
                'email' => [
                    'required',
                    'max:250',
                    'email'
                ],
                'miejsceZamieszkania' => [
                    'string',
                    'max:60',
                    'nullable'
                ],
                'ulica' => [
                    'string',
                    'nullable',
                    'max:60'
                ],
                'numerDomu' => [
                    'max:6',
                    'nullable'
                ],
                'mieszkanie' => [
                    'max:6',
                    'nullable'
                ],
                'kodPocztowy' => [
                    'min:6',
                    'max:6',
                    'nullable'
                ],
                'gmina' => [
                    'max:60',
                    'nullable'
                ],
            ];
        }

    }