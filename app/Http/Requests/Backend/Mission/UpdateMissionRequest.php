<?php

namespace App\Http\Requests\Backend\Mission;

use App\Http\Requests\Request;

/**
 * Class UpdateMissionRequest
 * @package App\Http\Requests\Backend\Mission
 */
class UpdateMissionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-missions');
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
            'person' => 'required'
        ];
    }
}
