<?php

namespace App\Http\Requests\Backend\ProgramType;

use App\Http\Requests\Request;

/**
 * Class DeleteProgramTypeRequest
 * @package App\Http\Requests\Backend\ProgramType
 */
class DeleteProgramTypeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-program_types');
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
