<?php

namespace App\Http\Requests\Backend\Student;

use App\Http\Requests\Request;

/**
 * Class UpdateStudentRequest
 * @package App\Http\Requests\Backend\Student
 */
class UpdateStudentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-students');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_kh' => 'required',
            'name_latin' => 'required',
            'dob' => 'required',
            'id_card' => 'required',
            'address' => 'required',
            'department_id' => 'required'
        ];
    }
}
