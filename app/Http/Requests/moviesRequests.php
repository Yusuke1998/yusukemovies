<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class moviesRequests extends FormRequest
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
            'title'               =>      'required|min:10|max:100',
            'sinopsis'            =>      'required|min:10|max:300',
            'content'             =>      'required|min:20|max:500',
            'user_id'             =>      'required',
            'year_id'             =>      'required',
            'director_id'         =>      'required',
            'category_id'         =>      'required',
            'actor_id'            =>      'required',
            'poster_id'           =>      'required',
        ];
    }

    public function messages(){
        return [
            'title.required'            =>      'El titulo es requerido',
            'title.min'                 =>      'El titulo es muy corto',
            'title.max'                 =>      'El titulo es muy largo',
            'sinopsis.required'         =>      'La sinopsis es requerida',
            'sinopsis.min'              =>      'La sinopsis es muy corta',
            'sinopsis.max'              =>      'La sinopsis es muy larga',
            'content.required'          =>      'El contenido es requerido',
            'content.min'               =>      'El contenido es muy corto',
            'content.max'               =>      'El contenido es muy largo',
            'user_id.required'          =>      'El usuario es requerido',
            'year_id.required'          =>      'El año es requerido',
            'director_id.required'      =>      'El director es requerido',
            'category_id.required'      =>      'La categoria es requerida',
            'actor_id.required'         =>      'El actor es requerido',
            'poster_id.required'         =>      'El poster es requerido',
        ];
    }
}
