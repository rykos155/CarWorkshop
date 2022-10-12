<?php

namespace App\Http\Requests\Orders;

use App\Models\Order;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class StoreOrderRequest extends FormRequest
    {
        /**
        *
        *REGUŁY WALIDACJI
        * @return array
        */

        public function rules()
        {
            
            return [
                'startDate' => [
                    'required'
                ],
                'endDate' => [
                    'required'
                ],
                'description' => [
                    'required',
                    'max:255',
                    'string'
                ]
            ];
        }

    }