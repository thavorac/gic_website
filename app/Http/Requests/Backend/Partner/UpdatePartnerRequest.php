<?php

namespace App\Http\Requests\Backend\Partner;

use App\Http\Requests\Request;

/**
 * Class UpdatePartnerRequest
 * @package App\Http\Requests\Backend\Partner
 */
class UpdatePartnerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-partners');
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
