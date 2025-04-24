<?php

namespace App\Http\Requests\Web\Admin\Information;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ErrorMessageValidation;
use App\Models\Information;

class AddReq extends FormRequest
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
            'image' => ['bail', 'required', 'file', 'image', 'max:' . Information::IMAGE_MAX_SIZE],
            'description' => ['bail', 'required', 'string', 'max:' . Information::MAX['description']],
            'name' => ['bail', 'required', 'string', 'max:' . Information::MAX['name']],
            'date' => ['bail', 'required', 'date'],
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
            'image' => 'foto informasi',
            'name' => 'judul informasi',
            'date' => 'tanggal',
        ];
    }
}
