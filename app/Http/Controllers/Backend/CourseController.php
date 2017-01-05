<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Course\StoreCourseRequest;
use App\Http\Requests\Backend\Course\UpdateCourseRequest;
use App\Models\Department;
use App\Repositories\Backend\Course\CourseRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class CourseController
 * @package App\Http\Controllers\Backend
 */
class CourseController extends Controller
{

    protected $courses;

    public function __construct(
        CourseRepositoryContract $courseRepo
    )
    {
        $this->courses = $courseRepo;
    }
    
    public function index()
    {
        return view('backend.course.index');
    }

    public function create()
    {

        $departments = Department::lists('name_kh','id');
        return view('backend.course.create',compact('departments'));
    }

    public function store(StoreCourseRequest $request)
    {
        $this->courses->create($request->all());
        return redirect()->route('admin.course.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $course = $this->courses->findOrThrowException($id);
        return view('backend.course.edit',compact('course'));
    }

    public function update(UpdateCourseRequest $request, $id)
    {
        $this->courses->update($id, $request->all());
        return redirect()->route('admin.course.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy($id)
    {
        $this->courses->destroy($id);
        return redirect()->route('admin.course.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $courses = DB::table('courses')
            ->select(['id','name','credit','image','about','outcome','semester','syllabus','department_id']);

        $datatables =  app('datatables')->of($courses);


        return $datatables

            ->addColumn('action', function ($course) {
                return  '<a href="'.route('admin.course.edit',$course->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.course.destroy', $course->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}