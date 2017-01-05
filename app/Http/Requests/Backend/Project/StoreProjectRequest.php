<?php

namespace App\Http\Requests\Backend\Project;

use App\Http\Requests\Request;

/**
 * Class StoreProjectRequest
 * @package App\Http\Requests\Backend\Project
 */
class StoreProjectRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-projects');
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
            'job_responsibility' => 'required',
            'is_finished' => 'required'
        ];
    }
}
