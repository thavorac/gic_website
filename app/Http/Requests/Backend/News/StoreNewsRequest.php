<?php

namespace App\Http\Requests\Backend\News;

use App\Http\Requests\Request;

/**
 * Class StoreNewsRequest
 * @package App\Http\Requests\Backend\News
 */
class StoreNewsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-news');
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
