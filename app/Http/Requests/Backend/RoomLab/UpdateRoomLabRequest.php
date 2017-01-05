<?php

namespace App\Http\Requests\Backend\RoomLab;

use App\Http\Requests\Request;

/**
 * Class UpdateRoomLabRequest
 * @package App\Http\Requests\Backend\RoomLab
 */
class UpdateRoomLabRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-room_labs');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
