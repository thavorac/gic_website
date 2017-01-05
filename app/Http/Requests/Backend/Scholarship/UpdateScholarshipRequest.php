<?php

namespace App\Http\Requests\Backend\Scholarship;

use App\Http\Requests\Request;

/**
 * Class UpdateScholarshipRequest
 * @package App\Http\Requests\Backend\Scholarship
 */
class UpdateScholarshipRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-scholarships');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
