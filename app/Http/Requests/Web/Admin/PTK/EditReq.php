<?php

namespace App\Http\Requests\Web\Admin\PTK;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ErrorMessageValidation;
use App\Models\PTK;

class EditReq extends FormRequest
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
            'description' => ['bail', 'required', 'string', 'max:' . PTK::MAX['description']],
            'image' => ['bail', 'nullable', 'file', 'image', 'max:' . PTK::IMAGE_MAX_SIZE],
            'position' => ['bail', 'required', 'string', 'max:' . PTK::MAX['position']],
            'name' => ['bail', 'required', 'string', 'max:' . PTK::MAX['name']],
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
            'description' => 'deskripsi',
            'position' => 'jabatan',
            'image' => 'foto ptk',
            'name' => 'nama',
        ];
    }
}
