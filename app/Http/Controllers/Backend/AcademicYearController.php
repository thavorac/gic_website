<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AcademicYear\DeleteAcademicYearRequest;
use App\Http\Requests\Backend\AcademicYear\StoreAcademicYearRequest;
use App\Http\Requests\Backend\AcademicYear\UpdateAcademicYearRequest;
use App\Repositories\Backend\AcademicYear\AcademicYearRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class AcademicYearController
 * @package App\Http\Controllers\Backend
 */
class AcademicYearController extends Controller
{
    protected $academic_years;

    public function __construct(
        AcademicYearRepositoryContract $academic_yearRepo
    )
    {
        $this->academic_years = $academic_yearRepo;
    }

    public function index()
    {
        return view('backend.academic_year.index');
    }

    public function create()
    {

        return view('backend.academic_year.create');
    }

    public function store(StoreAcademicYearRequest $request)
    {
        $this->academic_years->create($request->all());
        return redirect()->route('admin.academic_year.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $academic_year = $this->academic_years->findOrThrowException($id);
        return view('backend.academic_year.edit',compact('academic_year'));
    }

    public function update(UpdateAcademicYearRequest $request, $id)
    {
        $this->academic_years->update($id, $request->all());
        return redirect()->route('admin.academic_year.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteAcademicYearRequest $request, $id)
    {
        $this->academic_years->destroy($id);
        return redirect()->route('admin.academic_year.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $datas = DB::table('academic_years')
            ->select(['id','year','description']);

        $datatables =  app('datatables')->of($datas);


        return $datatables
            ->addColumn('action', function ($data) {
                return  '<a href="'.route('admin.academic_year.edit',$data->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.academic_year.destroy', $data->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';

            })
            ->make(true);
    }
}