<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class validationUserCreate extends FormRequest
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
            'name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => ['required', Rule::unique('users')],
            'password' => 'required|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/',
            'id_card' => 'required|max:10'
        ];
    }

    public function attributes()
    {
        return[
            'name' => "del nom de l'usuari",
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Correu electrònic invàlid.',
            'password.regex' => '*La vostra contrasenya ha de tenir més de 8 caràcters, ha de contenir com a mínim 1 majúscula, 1 minúscula, 1 numèric i 1 caràcter especial.'
        ];
    }
    
}
