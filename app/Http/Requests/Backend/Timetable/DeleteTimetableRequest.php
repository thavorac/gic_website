<?php

namespace App\Http\Requests\Backend\Timetable;

use App\Http\Requests\Request;

/**
 * Class DeleteTimetableRequest
 * @package App\Http\Requests\Backend\Timetable
 */
class DeleteTimetableRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-timetables');
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
