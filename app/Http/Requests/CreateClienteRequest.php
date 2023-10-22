<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        //No manejaremos sesiones por el momento, por lo tanto pasaremos al método llamando rules.
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'=>'required',
            'apellido'=>'required',
            'dni'=>'required',
            'fregistro'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'correo'=>'required'
        ];
    }
}
