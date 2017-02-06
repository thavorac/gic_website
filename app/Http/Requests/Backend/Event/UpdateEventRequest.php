<?php

namespace App\Http\Requests\Backend\Event;

use App\Http\Requests\Request;

/**
 * Class UpdateEventRequest
 * @package App\Http\Requests\Backend\Event
 */
class UpdateEventRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-events');
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
            'date_start' => 'required',
            'date_end' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'require_register' => 'required',
            'pending' => 'required',
            'location' => 'required'
        ];
    }
}
