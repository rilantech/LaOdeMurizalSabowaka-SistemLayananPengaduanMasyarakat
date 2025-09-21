<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TambahDataUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fotoprofil' => 'required|max:500',
            'username' => 'required|max:500',
            'email' => 'required|max:500',
            'password' => 'required|max:500'
            
        ];
        
    }

    public function messages(): array
    {
        return [
            'fotoprofil.required' => ':attribute Tidak Boleh Kosong',
            'username.required' => ':attribute Tidak Boleh Kosong',
            'email.required' => ':attribute Tidak Boleh Kosong',
            'password.required' => ':attribute Tidak Boleh Kosong'

        ];
    }

    public function attributes(): array
    {
        return [
            'fotoprofil' => 'Foto profil',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password'
           
        ];
    }

}
