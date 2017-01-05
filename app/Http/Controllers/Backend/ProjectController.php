<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Project\DeleteProjectRequest;
use App\Http\Requests\Backend\Project\StoreProjectRequest;
use App\Http\Requests\Backend\Project\UpdateProjectRequest;
use App\Models\Partner;
use App\Repositories\Backend\Project\ProjectRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Backend
 */
class ProjectController extends Controller
{
    protected $projects;

    public function __construct(
        ProjectRepositoryContract $projectRepo
    )
    {
        $this->projects = $projectRepo;
    }
    public function index()
    {
        return view('backend.project.index');
    }

    public function create()
    {
        $partners = Partner::lists('name','id');
        return view('backend.project.create',compact('partners'));
    }

    public function store(StoreProjectRequest $request)
    {
        $this->projects->create($request->all());
        return redirect()->route('admin.project.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $project = $this->projects->findOrThrowException($id);
        return view('backend.project.edit',compact('project'));
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $this->projects->update($id, $request->all());
        return redirect()->route('admin.project.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteProjectRequest $request, $id)
    {
        $this->projects->destroy($id);
        return redirect()->route('admin.project.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $projects = DB::table('projects')
            ->select(['id','name','job_responsibility','about','description','is_finished','sponsor_id','partner_id']);

        $datatables =  app('datatables')->of($projects);


        return $datatables
            ->addColumn('action', function ($project) {
                return  '<a href="'.route('admin.project.edit',$project->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.project.destroy', $project->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}