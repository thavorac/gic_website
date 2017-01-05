<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Mission\DeleteMissionRequest;
use App\Http\Requests\Backend\Mission\StoreMissionRequest;
use App\Http\Requests\Backend\Mission\UpdateMissionRequest;
use App\Models\Employee;
use App\Repositories\Backend\Mission\MissionRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class MissionController
 * @package App\Http\Controllers\Backend
 */
class MissionController extends Controller
{
    protected $missions;

    public function __construct(
        MissionRepositoryContract $missionRepo
    )
    {
        $this->missions = $missionRepo;
    }
    public function index()
    {
        return view('backend.mission.index');
    }

    public function create()
    {
        $employees = Employee::lists('name_kh','id');
        return view('backend.mission.create',compact('employees'));
    }

    public function store(StoreMissionRequest $request)
    {
        $this->missions->create($request->all());
        return redirect()->route('admin.mission.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $mission = $this->missions->findOrThrowException($id);
        return view('backend.mission.edit',compact('mission'));
    }

    public function update(UpdateMissionRequest $request, $id)
    {
        $this->missions->update($id, $request->all());
        return redirect()->route('admin.mission.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteMissionRequest $request, $id)
    {
        $this->missions->destroy($id);
        return redirect()->route('admin.mission.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $missions = DB::table('missions')
            ->select(['id','name','file','description','person']);

        $datatables =  app('datatables')->of($missions);


        return $datatables
            ->addColumn('action', function ($mission) {
                return  '<a href="'.route('admin.mission.edit',$mission->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.mission.destroy', $mission->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}