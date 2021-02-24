<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsers extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Campo obrigatório!',
            'email.required' => 'Campo obrigatório!',
            'email.email' => 'E-mail inválido!',
            'email.unique' => 'Este email já foi cadastrado anteriormente!',
            'password.required' => 'Campo obrigatório!',
            'password.min' => 'A Senha deve conter no mínimo 8 caracteres!',
            'password.confirmed' => 'A confirmação deve ser idêntica a senha!',
        ];
    }
}
