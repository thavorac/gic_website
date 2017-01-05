<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Program\DeleteProgramRequest;
use App\Http\Requests\Backend\Program\StoreProgramRequest;
use App\Http\Requests\Backend\Program\UpdateProgramRequest;
use App\Models\ProgramType;
use App\Repositories\Backend\Program\ProgramRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class ProgramController
 * @package App\Http\Controllers\Backend
 */
class ProgramController extends Controller
{
    protected $programs;

    public function __construct(
        ProgramRepositoryContract $programRepo
    )
    {
        $this->programs = $programRepo;
    }
    public function index()
    {
        return view('backend.program.index');
    }

    public function create()
    {
        $program_types = ProgramType::lists("name",'id');
        return view('backend.program.create',compact('program_types'));
    }

    public function store(StoreProgramRequest $request)
    {
        $this->programs->create($request->all());
        return redirect()->route('admin.program.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $program = $this->programs->findOrThrowException($id);
        return view('backend.program.edit',compact('program'));
    }

    public function update(UpdateProgramRequest $request, $id)
    {
        $this->programs->update($id, $request->all());
        return redirect()->route('admin.program.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteProgramRequest $request, $id)
    {
        $this->programs->destroy($id);
        return redirect()->route('admin.program.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $programs = DB::table('programs')
            ->select(['id','name','about','syllabus','description','program_type_id']);

        $datatables =  app('datatables')->of($programs);


        return $datatables
            ->addColumn('action', function ($program) {
                return  '<a href="'.route('admin.program.edit',$program->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.program.destroy', $program->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}