<?php

namespace App\Http\Requests\Users;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class StoreUserRequest extends FormRequest
    {
        /**
        *
        *REGUŁY WALIDACJI
        * @return array
        */

        public function rules()
        {
            
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
                'email' => [
                    'required',
                    'max:250',
                    'email'
                ],
                'hasło' => [
                    'required'
                ],
                'potwierdźHasło' => [
                    'required'
                ],
            ];
        }

    }