<?php

namespace App\Http\Requests\Backend\Gallery;

use App\Http\Requests\Request;

/**
 * Class UpdateGalleryRequest
 * @package App\Http\Requests\Backend\Gallery
 */
class UpdateGalleryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-galleries');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required'
        ];
    }
}
