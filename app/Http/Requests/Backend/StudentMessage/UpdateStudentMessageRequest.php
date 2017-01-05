<?php

namespace App\Http\Requests\Backend\StudentMessage;

use App\Http\Requests\Request;

/**
 * Class UpdateStudentMessageRequest
 * @package App\Http\Requests\Backend\StudentMessage
 */
class UpdateStudentMessageRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-student_messages');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'message' => 'required'
        ];
    }
}
