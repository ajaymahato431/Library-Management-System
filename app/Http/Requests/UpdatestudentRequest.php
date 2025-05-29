<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatestudentRequest extends FormRequest
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
            'student_id' => "required|unique:students,student_id," . $this->route('student'),
            'name' => "required",
            'address' => "required",
            'gender' => "required",
            'class' => "required",
            'age' => "required",
            'phone' => "required",
            'email' => "required|email",
        ];
    }
}
