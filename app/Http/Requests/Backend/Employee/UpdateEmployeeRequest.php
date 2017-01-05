<?php

namespace App\Http\Requests\Backend\Employee;

use App\Http\Requests\Request;

/**
 * Class UpdateEmployeeRequest
 * @package App\Http\Requests\Backend\Employee
 */
class UpdateEmployeeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-employees');
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
            'name_latin' => 'required',
        ];
    }
}
