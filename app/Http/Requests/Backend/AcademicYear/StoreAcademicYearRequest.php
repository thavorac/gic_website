<?php

namespace App\Http\Requests\Backend\AcademicYear;

use App\Http\Requests\Request;

/**
 * Class StoreAcademicYearRequest
 * @package App\Http\Requests\Backend\AcademicYear
 */
class StoreAcademicYearRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-academic_years');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'year' => 'required',
        ];
    }
}
