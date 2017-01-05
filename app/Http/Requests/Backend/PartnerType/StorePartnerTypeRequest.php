<?php

namespace App\Http\Requests\Backend\PartnerType;

use App\Http\Requests\Request;

/**
 * Class StorePartnerTypeRequest
 * @package App\Http\Requests\Backend\PartnerType
 */
class StorePartnerTypeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-partner_types');
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
