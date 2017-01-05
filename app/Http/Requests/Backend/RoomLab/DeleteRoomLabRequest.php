<?php

namespace App\Http\Requests\Backend\RoomLab;

use App\Http\Requests\Request;

/**
 * Class DeleteRoomLabRequest
 * @package App\Http\Requests\Backend\RoomLab
 */
class DeleteRoomLabRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-room_labs');
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
