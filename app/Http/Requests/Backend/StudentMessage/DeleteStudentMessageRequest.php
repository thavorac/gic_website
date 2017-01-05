<?php

namespace App\Http\Requests\Backend\StudentMessage;

use App\Http\Requests\Request;

/**
 * Class DeleteStudentMessageRequest
 * @package App\Http\Requests\Backend\StudentMessage
 */
class DeleteStudentMessageRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-student_messages');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        ];
    }
}
