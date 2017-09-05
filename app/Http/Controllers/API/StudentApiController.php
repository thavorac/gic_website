<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Student\DeleteStudentRequest;
use App\Http\Requests\Backend\Student\StoreStudentRequest;
use App\Http\Requests\Backend\Student\UpdateStudentRequest;
use App\Models\Department;
use App\Models\Student;
use App\Repositories\Backend\Student\StudentRepositoryContract;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class StudentApiController
 * @package App\Http\Controllers\API
 */
class StudentApiController extends Controller
{
    protected $students;

    public function __construct(
        StudentRepositoryContract $studentRepo
    )
    {
        $this->students = $studentRepo;
    }
    public function get()
    {
        $students = Student::get();
        return $students;
    }
    public function search(Request $request){
        $keyword = $request->get('keyword');
        if(!$keyword){
            $keyword = "";
        }
        $students = Student::where('name_kh', 'ILIKE', '%'.$keyword.'%')
                            ->orWhere('name_latin','ILIKE','%'.$keyword.'%')
                            ->get();
        return $students;
    }
}