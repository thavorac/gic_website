<?php

namespace App\Http\Requests\Backend\Department;

use App\Http\Requests\Request;

/**
 * Class DeleteDepartmentRequest
 * @package App\Http\Requests\Backend\Department
 */
class DeleteDepartmentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-departments');
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
