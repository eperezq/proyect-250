<?php

namespace App\Http\Requests\cliente;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'razonSocial'=>'required|max:200',
            'direccion'=>'max:200',
            'email1'=>'max:200',
            'email2'=>'max:200',
            'telefono1'=>'max:15',
            'telefono2'=>'max:15',
            'distrito'=>'max:50',
            'provincia'=>'max:50',
            'departamento'=>'max:100',
          
        ];
    }
}
