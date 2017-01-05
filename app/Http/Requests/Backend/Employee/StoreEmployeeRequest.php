<?php

namespace App\Http\Requests\Backend\Employee;

use App\Http\Requests\Request;

/**
 * Class StoreEmployeeRequest
 * @package App\Http\Requests\Backend\Employee
 */
class StoreEmployeeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-employees');
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
