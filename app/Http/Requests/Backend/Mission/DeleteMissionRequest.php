<?php

namespace App\Http\Requests\Backend\Mission;

use App\Http\Requests\Request;

/**
 * Class DeleteMissionRequest
 * @package App\Http\Requests\Backend\Mission
 */
class DeleteMissionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-missions');
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