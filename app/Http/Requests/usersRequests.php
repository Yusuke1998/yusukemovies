<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersRequests extends FormRequest
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
            'name' =>  'required|max:20|min:2',
            'email'  =>  'required|max:50|min:10',
            'password' =>  'required|max:100|min:6',
        ];
    }

    public function messages()
    {
        return[
            'name.required'    =>  'El nombre es requerido!',
            'email.required'     =>  'El correo electronico es requerido!',
            'name.max'         =>  'El nombre es demasiado largo!',
            'email.max'          =>  'El correo electronico es demasiado largo!',
            'name.min'         =>  'El nombre es demasiado corto!',
            'email.min'          =>  'El correo electronico es demasiado corto!',
            'password.required'    =>  'La contraseña es requerida!',
            'password.max'         =>  'La contraseña es muy larga!',
            'password.min'         =>  'La contraseña es muy corta!',
        ];
    }
}
