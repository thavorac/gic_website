<?php

namespace App\Http\Requests\Backend\Slideshow;

use App\Http\Requests\Request;

/**
 * Class UpdateSlideshowRequest
 * @package App\Http\Requests\Backend\Slideshow
 */
class UpdateSlideshowRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-slideshows');
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
            'image' => 'required',
            'description' => 'required',
            'page_url' => 'required'
        ];
    }
}
