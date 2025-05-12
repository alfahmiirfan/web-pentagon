<?php

namespace App\Http\Requests\Web\Admin\Student;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ErrorMessageValidation;
use App\Models\Student;

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
            'gender' => ['bail', 'required', 'string', 'in:' . implode(',', Student::GetGenderValues())],
            'birth_place' => ['bail', 'required', 'string', 'max:' . Student::MAX['birth_place']],
            'generation' => ['bail', 'required', 'string', 'max:' . Student::MAX['generation']],
            'email' => ['bail', 'required', 'string', 'email', 'max:' . Student::MAX['email']],
            'image' => ['bail', 'nullable', 'file', 'image', 'max:' . Student::IMAGE_MAX_SIZE],
            'address' => ['bail', 'required', 'string', 'max:' . Student::MAX['address']],
            'phone' => ['bail', 'required', 'string', 'max:' . Student::MAX['phone']],
            'name' => ['bail', 'required', 'string', 'max:' . Student::MAX['name']],
            'nisn' => ['bail', 'required', 'string', 'max:' . Student::MAX['nisn']],
            'birth_date' => ['bail', 'required', 'date'],
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
            'birth_place' => 'tempat lahir',
            'birth_date' => 'tanggal lahir',
            'gender' => 'jenis kelamin',
            'generation' => 'angkatan',
            'image' => 'foto siswa',
            'phone' => 'no telepon',
            'address' => 'alamat',
            'email' => 'email',
            'name' => 'nama',
            'nisn' => 'nisn',
        ];
    }
}
