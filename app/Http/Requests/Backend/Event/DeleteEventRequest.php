<?php

namespace App\Http\Requests\Backend\Event;

use App\Http\Requests\Request;

/**
 * Class DeleteEventRequest
 * @package App\Http\Requests\Backend\Event
 */
class DeleteEventRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-events');
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
