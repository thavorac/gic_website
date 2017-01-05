<?php

namespace App\Http\Requests\Backend\Employee;

use App\Http\Requests\Request;

/**
 * Class DeleteEmployeeRequest
 * @package App\Http\Requests\Backend\Employee
 */
class DeleteEmployeeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-employees');
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
