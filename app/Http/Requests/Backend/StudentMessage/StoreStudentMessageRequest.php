<?php

namespace App\Http\Requests\Backend\StudentMessage;

use App\Http\Requests\Request;

/**
 * Class StoreStudentMessageRequest
 * @package App\Http\Requests\Backend\StudentMessage
 */
class StoreStudentMessageRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-student_messages');
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
