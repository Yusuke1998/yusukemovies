<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class actorsRequests extends FormRequest
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
            'firstname' =>  'required|max:20|min:2',
            'lastname'  =>  'required|max:20|min:2',
            'biography' =>  'required|max:500|min:20',
        ];
    }

    public function messages()
    {
        return[
            'firstname.required'    =>  'El nombre es requerido!',
            'lastname.required'     =>  'El apellido es requerido!',
            'firstname.max'         =>  'El nombre es demasiado largo!',
            'lastname.max'          =>  'El napellido es demasiado largo!',
            'firstname.min'         =>  'El nombre es demasiado corto!',
            'lastname.min'          =>  'El apellido es demasiado corto!',
            'biography.required'    =>  'La biografia es requerida!',
            'biography.max'         =>  'La biografia es muy larga!',
            'biography.min'         =>  'La bografia es muy corta!',
        ];
    }
}
