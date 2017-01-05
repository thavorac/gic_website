<?php

namespace App\Http\Requests\Backend\Program;

use App\Http\Requests\Request;

/**
 * Class UpdateProgramRequest
 * @package App\Http\Requests\Backend\Program
 */
class UpdateProgramRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-programs');
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
            'about' => 'required'
        ];
    }
}
