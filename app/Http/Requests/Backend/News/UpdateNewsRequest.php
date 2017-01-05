<?php

namespace App\Http\Requests\Backend\News;

use App\Http\Requests\Request;

/**
 * Class UpdateNewsRequest
 * @package App\Http\Requests\Backend\News
 */
class UpdateNewsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-news');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'context' => 'required'
        ];
    }
}
