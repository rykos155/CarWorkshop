<?php

namespace App\Http\Requests\Parts;

use App\Models\Part;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class UpdatePartRequest extends FormRequest
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
                'kategoria' => [
                    'required'
                ], 
                'ilość' => [
                    'required',
                    'numeric'
                ], 
                'cena' => [
                    'required',
                    'numeric'
                ],
                'stanMagazynowy' => [
                    
                ]
            ];
        }

    }