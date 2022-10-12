<?php

namespace App\Http\Requests\Brands;

use App\Models\Brand;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class UpdateBrandRequest extends FormRequest
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
                    'required',
                    'string',
                    'alpha',
                    'max:60'
                ]              
            ];
        }

    }