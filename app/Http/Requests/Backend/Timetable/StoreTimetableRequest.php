<?php

namespace App\Http\Requests\Backend\Timetable;

use App\Http\Requests\Request;

/**
 * Class StoreTimetableRequest
 * @package App\Http\Requests\Backend\Timetable
 */
class StoreTimetableRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-timetables');
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
            'file' => 'required',
            'trimester' => 'required',
            'academic_year_id' => 'required'
        ];
    }
}
