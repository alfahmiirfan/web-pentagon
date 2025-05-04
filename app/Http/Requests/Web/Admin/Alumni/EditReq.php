<?php

namespace App\Http\Requests\Web\Admin\Alumni;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ErrorMessageValidation;
use App\Models\Alumni;

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
            'year' => ['bail', 'required', 'string', 'min:' . Alumni::MAX['year'], 'max:' . Alumni::MAX['year']],
            'description' => ['bail', 'required', 'string', 'max:' . Alumni::MAX['description']],
            'image' => ['bail', 'nullable', 'file', 'image', 'max:' . Alumni::IMAGE_MAX_SIZE],
            'job_place' => ['bail', 'required', 'string', 'max:' . Alumni::MAX['job_place']],
            'position' => ['bail', 'required', 'string', 'max:' . Alumni::MAX['position']],
            'address' => ['bail', 'required', 'string', 'max:' . Alumni::MAX['address']],
            'status' => ['bail', 'required', 'string', 'max:' . Alumni::MAX['status']],
            'phone' => ['bail', 'required', 'string', 'max:' . Alumni::MAX['phone']],
            'class' => ['bail', 'required', 'string', 'max:' . Alumni::MAX['class']],
            'name' => ['bail', 'required', 'string', 'max:' . Alumni::MAX['name']],
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
            'position' => 'bidang / program studi / posisi',
            'job_place' => 'institusi / tempat kerja',
            'description' => 'kesan dan pesan',
            'address' => 'domisili saat ini',
            'status' => 'status saat ini',
            'image' => 'foto alumni',
            'phone' => 'no telepon',
            'year' => 'tahun lulus',
            'class' => 'kelas',
            'name' => 'nama',
        ];
    }
}
