<?php

namespace App\Http\Requests\proveedor;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorEditRequest extends FormRequest
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
            'razonSocial'=>'required|max:250',
            'ruc'=>'required|max:14',
            'direccion'=>'max:300',
            'telefono1'=>'max:20',
            'telefono2'=>'max:30',
            'email1'=>'required|max:100',
            'email2'=>'max:100',
        ];
    }
}
