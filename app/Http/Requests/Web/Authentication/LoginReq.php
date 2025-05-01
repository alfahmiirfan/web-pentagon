<?php

namespace App\Http\Requests\Web\Authentication;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ErrorMessageValidation;

class LoginReq extends FormRequest
{
    use ErrorMessageValidation;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['bail', 'required', 'string', 'email'],
            'password' => ['bail', 'required', 'string'],
        ];
    }

    /**
     * Aliases name
     * 
     * @return array
     */
    public function attributes(): array
    {
        return [
            'password' => 'Kata sandi',
            'email' => 'Email',
        ];
    }
}
