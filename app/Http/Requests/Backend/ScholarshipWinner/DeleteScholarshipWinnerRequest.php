<?php

namespace App\Http\Requests\Backend\ScholarshipWinner;

use App\Http\Requests\Request;

/**
 * Class DeleteScholarshipWinnerRequest
 * @package App\Http\Requests\Backend\ScholarshipWinner
 */
class DeleteScholarshipWinnerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-scholarship_winners');
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
