<?php

namespace App\Http\Requests\Backend\Partner;

use App\Http\Requests\Request;

/**
 * Class StorePartnerRequest
 * @package App\Http\Requests\Backend\Partner
 */
class StorePartnerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-partners');
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
