<?php

namespace App\Http\Requests\Backend\PartnerType;

use App\Http\Requests\Request;

/**
 * Class DeletePartnerTypeRequest
 * @package App\Http\Requests\Backend\PartnerType
 */
class DeletePartnerTypeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-partner_types');
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
