<?php

namespace App\Http\Requests\Backend\Project;

use App\Http\Requests\Request;

/**
 * Class DeleteProjectRequest
 * @package App\Http\Requests\Backend\Project
 */
class DeleteProjectRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-projects');
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
