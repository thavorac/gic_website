<?php

namespace App\Http\Requests\Backend\Slideshow;

use App\Http\Requests\Request;

/**
 * Class DeleteSlideshowRequest
 * @package App\Http\Requests\Backend\Slideshow
 */
class DeleteSlideshowRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-slideshows');
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
