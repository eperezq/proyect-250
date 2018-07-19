<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Empleado;
class EmpleadoRequest extends FormRequest
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
            
            'nroDocum'=>'required|max:10|unique:empleado',
            'appaterno'=>'required|max:60',
            'apmaterno'=>'required|max:60',
            'nombres'=>'required|max:50',
            'fechaNacimiento'=>'required',
            'lugarNacimiento'=>'required|max:50',
            'direccion'=>'max:200',
            'email'=>'max:200',
            'email2'=>'max:200',
            'telefono1'=>'max:15',
            'telefono2'=>'max:15',

        ];
    }
}
