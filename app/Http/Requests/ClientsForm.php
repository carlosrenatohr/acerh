<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsForm extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'contact_name' => 'required|min:10|max:100',
            'contact_phone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre de cliente es obligatorio',
            'email.required' => 'El correo de cliente es obligatorio',
            'contact_name.min' => 'Nombre de cliente debe tener al menos 10 caracteres.',
            'contact_name.max' => 'Nombre de cliente debe tener como maximo 100 caracteres.',
            'contact_name.required'  => 'El nombre de contacto es requerido',
            'contact_phone.required'  => 'El telefono de contacto es requerido',
        ];
    }
}
