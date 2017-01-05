<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Department\DeleteDepartmentRequest;
use App\Http\Requests\Backend\Timetable\StoreTimetableRequest;
use App\Http\Requests\Backend\Timetable\UpdateTimetableRequest;
use App\Models\AcademicYear;
use App\Repositories\Backend\Timetable\TimetableRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class TimetableController
 * @package App\Http\Controllers\Backend
 */
class TimetableController extends Controller
{
    protected $timetables;

    public function __construct(
        TimetableRepositoryContract $timetableRepo
    )
    {
        $this->timetables = $timetableRepo;
    }
    public function index()
    {
        return view('backend.timetable.index');
    }

    public function create()
    {
        $academic_years = AcademicYear::lists('year','id');
        return view('backend.timetable.create',compact('academic_years'));
    }

    public function store(StoreTimetableRequest $request)
    {
        $this->timetables->create($request->all());
        return redirect()->route('admin.timetable.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $timetable = $this->timetables->findOrThrowException($id);
        return view('backend.timetable.edit',compact('timetable'));
    }

    public function update(UpdateTimetableRequest $request, $id)
    {
        $this->timetables->update($id, $request->all());
        return redirect()->route('admin.timetable.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteDepartmentRequest $request, $id)
    {
        $this->timetables->destroy($id);
        return redirect()->route('admin.timetable.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $timetables = DB::table('timetables')
            ->select(['id','name','trimester','file','description','academic_year_id']);

        $datatables =  app('datatables')->of($timetables);

        return $datatables
            ->addColumn('action', function ($timetable) {
                return  '<a href="'.route('admin.timetable.edit',$timetable->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.timetable.destroy', $timetable->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}