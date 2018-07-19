<?php

namespace App\Http\Requests\producto;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'descripcion'=>'required|max:100',
            'presentacion'=>'required|max:100',
            'unidadMedida'=>'required|max:100',
            'marca'=>'required|max:100',
            'caracteristicas'=>'max:300',
            'stockAlmacen'=>'required',
           
            'idCategoria'=>'required',
        ];
    }
}
