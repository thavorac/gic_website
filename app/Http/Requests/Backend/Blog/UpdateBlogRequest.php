<?php

namespace App\Http\Requests\Backend\Blog;

use App\Http\Requests\Request;

/**
 * Class UpdateBlogRequest
 * @package App\Http\Requests\Backend\Blog
 */
class UpdateBlogRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-blogs');
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
            'content' => 'required',
        ];
    }
}
