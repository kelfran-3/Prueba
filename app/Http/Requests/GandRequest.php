<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
         'propietario'=>'required',   
         'marca'  =>'required',             
         'modelo'=>'required',
         'placa'=>'required',
         'bat'=>'required',
         'descripcion'=>'required',
         'estado'=>'required',
         'created_at' => 'required',



                    ];
    }
}
