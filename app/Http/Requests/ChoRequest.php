<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChoRequest extends FormRequest
{

     

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        
         'names'  =>'required',             
         'apellido'=>'required',
         'cedula'=>'required',
         'tlf'=>'required',
         'chuto'=>'required',
         'placa'=>'required',
         'created_at' => 'required',

        ];
    }
}
