<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EncargadoRequest extends FormRequest
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
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'parentesco' => 'required',
            'dpiencargado' => 'required|min:8|unique:encargados,dpiencargado,',
            'telefono' => 'required|min:8',
            'direccion' => 'required',
            'email' => 'required|email|unique:encargados,email,',
            'encargadoaux' => 'required',
            'parentescoaux' => 'required',
            'telefonoaux' => 'required|min:8',
        ];
    }

    public function attributes(){
        return[
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'parentesco' => 'Parentesco',
            'dpiencargado' => 'DPI',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'email' => 'Email',
            'encargadoaux' => 'Nombre del Encagado Aux.',
            'parentescoaux' => 'Parentesco del Enc. Aux.',
            'telefonoaux' => 'Telefono del Enc. Aux.',
        ];
    }

    public function messages(){
        return[
            'nombre.required' => 'El :attribute es obligatorio.',
            'name.min' => 'El :attribute no puede se menor que 3 caracteres.',
            'apellido.required' => 'El :attribute es obligatorio.',
            'apellido.min' => 'El :attribute no puede se menor que 3 caracteres.',
            'parentesco.required' => 'El :attribute es obligatorio.',
            'dpiencargado.required' => 'El :attribute es obligatorio.',
            'dpiencargado.unique' => 'El :attribute ya existe.',
            'dpiencargado.min' => 'El :attribute no puede se menor que 8 caracteres.',
            'telefono.required' => 'El :attribute es obligatorio.',
            'telefono.min' => 'El :attribute no puede ser de menor de 8 digitos.',
            'direccion.required' => 'El :attribute no es obligatorio.',
            'email.required' => 'El :attribute es obligatorio.',
            'email.email' => 'El :attribute no es un correo valido.',
            'email.unique' => 'El :attribute ya existe.',
            'encargadoaux.required' => 'El :attribute es obligatorio.',
            'parentescoaux.required' => 'El :attribute es obligatorio.',
            'telefonoaux.required' => 'El :attribute es obligatorio.',
            'telefonoaux.required' => 'El :attribute no puede ser menor a 8 digitos.',
        ];
    }
}
