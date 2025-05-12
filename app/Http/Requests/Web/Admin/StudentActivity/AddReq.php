<?php

namespace App\Http\Requests\Web\Admin\StudentActivity;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ErrorMessageValidation;
use App\Models\StudentActivity;

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
            'image' => ['bail', 'required', 'file', 'image', 'max:' . StudentActivity::IMAGE_MAX_SIZE],
            'name' => ['bail', 'required', 'string', 'max:' . StudentActivity::MAX['name']],
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
            'image' => 'foto kesiswaan',
            'name' => 'nama kesiswaan',
        ];
    }
}
