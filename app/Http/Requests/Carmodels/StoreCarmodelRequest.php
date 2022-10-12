<?php

namespace App\Http\Requests\Carmodels;

use App\Models\Carmodel;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class StoreCarmodelRequest extends FormRequest
    {
        /**
        *
        *REGUŁY WALIDACJI
        * @return array
        */

        public function rules()
        {
            
            return [
                'brand_id' => [
                    'required'
                ],   
                'model' => [
                    'required',
                    'string',
                    'alpha',
                    'max:60'
                ]           
            ];
        }

    }