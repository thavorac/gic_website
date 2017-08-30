<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Student\DeleteStudentRequest;
use App\Http\Requests\Backend\Student\StoreStudentRequest;
use App\Http\Requests\Backend\Student\UpdateStudentRequest;
use App\Models\Department;
use App\Models\Student;
use App\Repositories\Backend\Department\DepartmentRepositoryContract;
use App\Repositories\Backend\Student\StudentRepositoryContract;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class DepartmentApiController
 * @package App\Http\Controllers\API
 */
class DepartmentApiController extends Controller
{
    protected $departments;

    public function __construct(
        DepartmentRepositoryContract $departmentRepo
    )
    {
        $this->departments = $departmentRepo;
    }
    public function get()
    {
        $departments = Department::get();
        return $departments;
    }
}