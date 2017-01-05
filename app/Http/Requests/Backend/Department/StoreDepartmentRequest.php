<?php

namespace App\Http\Requests\Backend\Department;

use App\Http\Requests\Request;

/**
 * Class StoreDepartmentRequest
 * @package App\Http\Requests\Backend\Department
 */
class StoreDepartmentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-departments');
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
            'name_en' => 'required',
        ];
    }
}
