<?php

namespace App\Http\Requests\Web\Admin\Facility;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ErrorMessageValidation;
use App\Models\Facility;

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
            'image' => ['bail', 'nullable', 'file', 'image', 'max:' . Facility::IMAGE_MAX_SIZE],
            'name' => ['bail', 'required', 'string', 'max:' . Facility::MAX['name']],
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
            'image' => 'foto fasilitas',
            'name' => 'nama fasilitas',
        ];
    }
}
