<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperacionRequest extends FormRequest
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
            
             'guia'=>'required',
             'placa_gan'=>'required',
             'origen'=>'required',
             'destino'=>'required',
              'chofer'=>'required',
              'carga'=>'required',
              'status'=>'required',
              'created_at'=>'required',

                    ];
    }
}
