<?php

namespace App\Http\Requests\Backend\Course;

use App\Http\Requests\Request;

/**
 * Class UpdateCourseRequest
 * @package App\Http\Requests\Backend\Course
 */
class UpdateCourseRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-courses');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'credit' => 'required',
            'image' => 'required'
        ];
    }
}
