<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,',
            'password' => 'required',
            'dpi' => 'required|min:8|unique:users,dpi,',
        ];
    }

    public function messages(){
        return[
            'name.required' => 'El :attribute es obligatorio.',
            'name.min' => 'El :attribute no puede se menor que 3 caracteres.',
            'email.required' => 'El :attribute es obligatorio.',
            'email.email' => 'El :attribute no es un correo valido.',
            'email.unique' => 'El :attribute ya existe.',
            'password.required' => 'La :attribute es obligatorio.',
            'dpi.required' => 'El :attribute es obligatorio.',
            'dpi.unique' => 'El :attribute ya existe.',
            'dpi.min' => 'El :attribute no puede se menor que 8 caracteres.',
        ];
    }
}
