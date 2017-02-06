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
        $academic_years = AcademicYear::lists('description','id');
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
            ->join('academic_years','timetables.academic_year_id','=','academic_years.id')
            ->select([
                'timetables.id',
                'timetables.name',
                'timetables.trimester',
                'timetables.file',
                'timetables.description',
                'academic_years.description as academic_year'
            ]);

        $datatables =  app('datatables')->of($timetables);

        return $datatables
            ->addColumn('info', function($timetable) {
                ob_start();
                ?>
                <div class="row">
                    <div class="col-sm-8">
                        <embed src="<?php echo $timetable->file ?>" width="100%" height="400px" style="overflow: hidden"/>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <b><?php echo $timetable->name ?></b>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo $timetable->trimester ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo $timetable->academic_year ?>
                                        <p>
                                            <?php echo $timetable->description ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-top: 15px">
                                <a href="<?php echo route('admin.timetable.edit',$timetable->id) ?>" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo trans('buttons.general.crud.edit') ?>"></i>
                                </a>
                                <button class="btn btn-xs btn-danger btn-delete" data-remote="<?php echo route('admin.timetable.destroy', $timetable->id) ?>">
                                    <i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="<?php echo trans('buttons.general.crud.delete') ?>"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $html = ob_get_clean();
                return $html;
            })
            ->make(true);
    }
}