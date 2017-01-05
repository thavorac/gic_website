<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProgramType\DeleteProgramTypeRequest;
use App\Http\Requests\Backend\ProgramType\StoreProgramTypeRequest;
use App\Http\Requests\Backend\ProgramType\UpdateProgramTypeRequest;
use App\Repositories\Backend\ProgramType\ProgramTypeRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class ProgramTypeController
 * @package App\Http\Controllers\Backend
 */
class ProgramTypeController extends Controller
{
    protected $program_types;

    public function __construct(
        ProgramTypeRepositoryContract $program_typeRepo
    )
    {
        $this->program_types = $program_typeRepo;
    }
    public function index()
    {
        return view('backend.program_type.index');
    }

    public function create()
    {

        return view('backend.program_type.create');
    }

    public function store(StoreProgramTypeRequest $request)
    {
        $this->program_types->create($request->all());
        return redirect()->route('admin.program_type.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $program_type = $this->program_types->findOrThrowException($id);
        return view('backend.program_type.edit',compact('program_type'));
    }

    public function update(UpdateProgramTypeRequest $request, $id)
    {
        $this->program_types->update($id, $request->all());
        return redirect()->route('admin.program_type.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteProgramTypeRequest $request, $id)
    {
        $this->program_types->destroy($id);
        return redirect()->route('admin.program_type.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $program_types = DB::table('program_types')
            ->select(['id','name','description']);

        $datatables =  app('datatables')->of($program_types);


        return $datatables
            ->addColumn('action', function ($program_type) {
                return  '<a href="'.route('admin.program_type.edit',$program_type->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.program_type.destroy', $program_type->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}