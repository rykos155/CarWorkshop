<?php

namespace App\Http\Requests\Cars;

use App\Models\Car;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;


    class UpdateCarRequest extends FormRequest
    {
        /**
        *
        *REGUŁY WALIDACJI
        * @return array
        */

        public function rules()
        {
            // Validator::extend('unique name',
            //     function ($attribute, $value, $parameters, $validator) {
            //         $result = Status::withTrashed()->where('id','!=', $this->status)->where('rodzaj', $value)->count();
            //         return $result === 0;
            //     },
            //     __('validation.custom.rodzaj.unique', ['rodzaj' => $this->rodzaj])  
            // );
            
            return [
                'marka' => [
                    'required'
                ],
                'model' => [
                    'required'
                ],
                'generacja' => [
                    'required',
                    'max:60'
                ],
                'rokProdukcji' => [
                    'required',
                    'numeric',
                    'digits_between: 4,4'
                ],
                'vin' => [
                    'required',
                    'max:17',
                ],
                'rejestracja' => [
                    'required',
                    'max:10'
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
                    'required',
                    'numeric',
                    'max:3000000'
                ]
            ];
        }

    }