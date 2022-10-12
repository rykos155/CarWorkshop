<?php

namespace App\Http\Requests\Estimates;

use App\Models\Estimate;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class UpdateEstimateRequest extends FormRequest
    {
        /**
        *
        *REGUŁY WALIDACJI
        * @return array
        */

        public function rules()
        {
            
            return [
                'usługa1' => [
                    'max:200',
                    'required',
                    'string'
                ],
                'cena1' => [
                    'required',
                    'numeric'
                ],
                'usługa2' => [
                    'max:200',
                    'nullable',
                    'string'
                ],
                'cena2' => [
                    'nullable',
                    'numeric'
                ],
                'usługa3' => [
                    'max:200',
                    'nullable',
                    'string'
                ],
                'cena3' => [
                    'nullable',
                    'numeric'
                ],
                'usługa4' => [
                    'max:200',
                    'nullable',
                    'string'
                ],
                'cena4' => [
                    'nullable',
                    'numeric'
                ],
                'usługa5' => [
                    'max:200',
                    'nullable',
                    'string'
                ],
                'cena5' => [
                    'nullable',
                    'numeric'
                ],
                'usługa6' => [
                    'max:200',
                    'nullable',
                    'string'
                ],
                'cena6' => [
                    'nullable',
                    'numeric'
                ],
                'usługa7' => [
                    'nullable',
                    'max:200',
                    'string'
                ],
                'cena7' => [
                    'nullable',
                    'numeric'
                ],
                'usługa8' => [
                    'max:200',
                    'nullable',
                    'string'
                ],
                'cena8' => [
                    'nullable',
                    'numeric'
                ],
                'usługa9' => [
                    'max:200',
                    'nullable',
                    'string'
                ],
                'cena9' => [
                    'nullable',
                    'numeric'
                ],
                'usługa10' => [
                    'max:200',
                    'nullable',
                    'string'
                ],
                'cena10' => [
                    'nullable',
                    'numeric'
                ],
                'Dodatkowe informacje dla klienta' => [
                    'string',
                    'max:60'
                ]
            ];
        }

    }