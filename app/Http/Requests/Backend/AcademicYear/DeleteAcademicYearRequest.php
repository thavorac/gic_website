<?php

namespace App\Http\Requests\Backend\AcademicYear;

use App\Http\Requests\Request;

/**
 * Class DeleteAcademicYearRequest
 * @package App\Http\Requests\Backend\AcademicYear
 */
class DeleteAcademicYearRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-academic_years');
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
