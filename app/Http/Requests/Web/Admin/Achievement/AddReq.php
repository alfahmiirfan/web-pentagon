<?php

namespace App\Http\Requests\Web\Admin\Achievement;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ErrorMessageValidation;
use App\Models\Achievement;

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
            'description' => ['bail', 'required', 'string', 'max:' . Achievement::MAX['description']],
            'image' => ['bail', 'required', 'file', 'image', 'max:' . Achievement::IMAGE_MAX_SIZE],
            'name' => ['bail', 'required', 'string', 'max:' . Achievement::MAX['name']],
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
            'image' => 'foto prestasi',
            'name' => 'judul prestasi',
            'date' => 'tanggal',
        ];
    }
}
