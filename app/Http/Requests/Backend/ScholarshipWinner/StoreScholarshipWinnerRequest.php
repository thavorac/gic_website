<?php

namespace App\Http\Requests\Backend\ScholarshipWinner;

use App\Http\Requests\Request;

/**
 * Class StoreScholarshipWinnerRequest
 * @package App\Http\Requests\Backend\ScholarshipWinner
 */
class StoreScholarshipWinnerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-scholarship_winners');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_kh' => 'required',
            'name_latin' => 'required',
            'is_staff' => 'required',
            'university' => 'required',
            'scholarship_id' => 'required'
        ];
    }
}
