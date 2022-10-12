<?php

namespace App\Http\Requests\Cars;

use App\Models\Car;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class StoreCarRequest extends FormRequest
    {
        /**
        *
        *REGUŁY WALIDACJI
        * @return array
        */

        public function rules()
        {
            
            return [
                'marka' => [
                    'required'
                ],
                'model' => [
                    'required'
                ],
                'generacja' => [
                    'string',
                    'nullable',
                    'max:60'
                ],
                'rokProdukcji' => [
                    'required',
                    'numeric',
                    'digits_between: 4,4'
                ],
                'vin' => [
                    'required',
                    'min:17',
                    'max:17',
                ],
                'rejestracja' => [
                    'max:14',
                    'nullable',
                    'string'
                ],
                'kolor' => [
                    'string',
                    'nullable',
                    'max:60'
                ],
                'typNadwozia' => [
                    'required'
                ],
                'rodzajSilnika' => [
                    'required'
                ],
                'pojemnosc' => [
                    'required',
                    'numeric',
                    'max:10'
                ],
                'moc' => [
                    'required',
                    'numeric',
                    'max:2000'
                ],
                'przebieg' => [
                    'numeric',
                    'max:3000000',
                    'numeric',
                    'nullable',
                ]
            ];
        }

    }