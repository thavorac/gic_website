<?php

namespace App\Http\Requests\Backend\UsefulLink;

use App\Http\Requests\Request;

/**
 * Class UpdateUsefulLinkRequest
 * @package App\Http\Requests\Backend\UsefulLink
 */
class UpdateUsefulLinkRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-useful_links');
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
            'url' => 'required'
        ];
    }
}
