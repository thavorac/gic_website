<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Student\DeleteStudentRequest;
use App\Http\Requests\Backend\Student\StoreStudentRequest;
use App\Http\Requests\Backend\Student\UpdateStudentRequest;
use App\Models\Department;
use App\Repositories\Backend\Student\StudentRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class StudentController
 * @package App\Http\Controllers\Backend
 */
class StudentController extends Controller
{
    protected $students;

    public function __construct(
        StudentRepositoryContract $studentRepo
    )
    {
        $this->students = $studentRepo;
    }
    public function index()
    {
        return view('backend.student.index');
    }

    public function create()
    {
        $departments = Department::lists('name_kh','id');
        return view('backend.student.create',compact('departments'));
    }

    public function store(StoreStudentRequest $request)
    {
        $this->students->create($request->all());
        return redirect()->route('admin.student.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $student = $this->students->findOrThrowException($id);
        return view('backend.student.edit',compact('student'));
    }

    public function update(UpdateStudentRequest $request, $id)
    {
        $this->students->update($id, $request->all());
        return redirect()->route('admin.student.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteStudentRequest $request, $id)
    {
        $this->students->destroy($id);
        return redirect()->route('admin.student.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $students = DB::table('students')
            ->select(['id','name_kh','name_latin','photo','dob','personal_phone','parent_phone','email','id_card','address','description','about','department_id']);

        $datatables =  app('datatables')->of($students);


        return $datatables
            ->addColumn('action', function ($student) {
                return  '<a href="'.route('admin.student.edit',$student->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.student.destroy', $student->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}