<?php

namespace App\Http\Requests\Backend\File;

use App\Http\Requests\Request;

/**
 * Class StoreFileRequest
 * @package App\Http\Requests\Backend\File
 */
class StoreFileRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-files');
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
            'url' => 'required',
        ];
    }
}
