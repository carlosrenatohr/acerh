<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsForm extends FormRequest
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
            'title' => 'required|min:10|max:100',
            'client_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El campo de título es obligatorio',
            'title.min' => 'El campo de título debe tener al menos 10 caracteres.',
            'title.max' => 'El campo de título debe tener como maximo 100 caracteres.',
            'client_id.required'  => 'Selecciona un cliente',
        ];
    }
}
