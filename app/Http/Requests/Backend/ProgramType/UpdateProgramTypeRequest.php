<?php

namespace App\Http\Requests\Backend\ProgramType;

use App\Http\Requests\Request;

/**
 * Class UpdateProgramTypeRequest
 * @package App\Http\Requests\Backend\ProgramType
 */
class UpdateProgramTypeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-program_types');
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
