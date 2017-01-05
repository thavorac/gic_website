<?php

namespace App\Http\Requests\Backend\News;

use App\Http\Requests\Request;

/**
 * Class DeleteNewsRequest
 * @package App\Http\Requests\Backend\News
 */
class DeleteNewsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-news');
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
