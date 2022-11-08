<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuario extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'cedula' =>  'required|numeric|unique:users|integer|min:10',
            'password'=>'required|same:confirm-password',
            'roles'=>'required'
        ];
    }

    public function messages() {
        return [ 
        'name.required' => 'El campo name no puede quedar en blanco',
        'emailyy.required' => 'El campo email no puede quedar en blanco',
        'email.unique' => 'Este email ya se encuentra registrado en nuestra base de datos',
        'cedula.required' => 'No puede dejar en blanco este campo',
        'cedula.numeric' => 'Debe ingresar solo valores numericos',
        'cedula.unique' => 'Esta cedula ya se encuentra en nuestros registros',
        'cedula.min' => 'La cedula debe de tener minimo 10 caracteres',
        'cedula.max' => 'La cedula debe de tener solo 10 caracteres',
        'body.required' => 'A message is required'
        ];
    }
}
