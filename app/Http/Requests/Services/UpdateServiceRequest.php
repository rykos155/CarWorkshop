<?php

namespace App\Http\Requests\Services;

use App\Models\Service;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class UpdateServiceRequest extends FormRequest
    {
        /**
        *
        *REGUŁY WALIDACJI
        * @return array
        */

        public function rules()
        {
            
            return [
                'estimate_id' => [
                    
                ],   
                'nazwa' => [
                    'required',
                    'string',
                    'max:60'
                ],      

                'cena' => [
                    'required',
                    'numeric'
                ]
            ];
        }

    }