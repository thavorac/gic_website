<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Scholarship\DeleteScholarshipRequest;
use App\Http\Requests\Backend\Scholarship\StoreScholarshipRequest;
use App\Http\Requests\Backend\Scholarship\UpdateScholarshipRequest;
use App\Repositories\Backend\Scholarship\ScholarshipRepositoryContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

/**
 * Class ScholarshipController
 * @package App\Http\Controllers\Backend
 */
class ScholarshipController extends Controller
{
    protected $scholarships;

    public function __construct(
        ScholarshipRepositoryContract $scholarshipRepo
    )
    {
        $this->scholarships = $scholarshipRepo;
    }
    public function index()
    {
        return view('backend.scholarship.index');
    }

    public function create()
    {

        return view('backend.scholarship.create');
    }

    public function store(StoreScholarshipRequest $request)
    {
        $this->scholarships->create($request->all());
        return redirect()->route('admin.scholarship.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $scholarship = $this->scholarships->findOrThrowException($id);
        return view('backend.scholarship.edit',compact('scholarship'));
    }

    public function update(UpdateScholarshipRequest $request, $id)
    {
        $this->scholarships->update($id, $request->all());
        return redirect()->route('admin.scholarship.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteScholarshipRequest $request, $id)
    {
        if($this->scholarships->destroy($id)){
            //return redirect()->route('admin.scholarship.index')->withFlashSuccess(trans('alerts.generals.deleted'));
            return Response::json(array("success"=>true,"message"=>trans('alerts.generals.deleted')));
        } else {
            return Response::json(array("success"=>false,"message"=>trans('alerts.backend.scholarships.error.deleted')));
        }
    }

    public function data()
    {

        $scholarships = DB::table('scholarships')
            ->select(['id','name','about','description']);

        $datatables =  app('datatables')->of($scholarships);


        return $datatables
            ->addColumn('action', function ($scholarship) {
                return  '<a href="'.route('admin.scholarship.edit',$scholarship->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.scholarship.destroy', $scholarship->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}