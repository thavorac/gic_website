<?php

namespace App\Http\Requests\Backend\Scholarship;

use App\Http\Requests\Request;

/**
 * Class DeleteScholarshipRequest
 * @package App\Http\Requests\Backend\Scholarship
 */
class DeleteScholarshipRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-scholarships');
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
