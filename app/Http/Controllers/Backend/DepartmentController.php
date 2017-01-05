<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Department\DeleteDepartmentRequest;
use App\Http\Requests\Backend\Department\StoreDepartmentRequest;
use App\Http\Requests\Backend\Department\UpdateDepartmentRequest;
use App\Repositories\Backend\Department\DepartmentRepositoryContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

/**
 * Class DepartmentController
 * @package App\Http\Controllers\Backend
 */
class DepartmentController extends Controller
{

    protected $departments;

    public function __construct(
        DepartmentRepositoryContract $departmentRepo
    )
    {
        $this->departments = $departmentRepo;
    }

    public function index()
    {
        return view('backend.department.index');
    }

    public function create()
    {

        return view('backend.department.create');
    }

    public function store(StoreDepartmentRequest $request)
    {
        $this->departments->create($request);
        return redirect()->route('admin.department.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $department = $this->departments->findOrThrowException($id);
        return view('backend.department.edit',compact('department'));
    }

    public function update(UpdateDepartmentRequest $request, $id)
    {
        $this->departments->update($id, $request);
        return redirect()->route('admin.department.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteDepartmentRequest $request, $id)
    {
        $this->departments->destroy($id);
        return redirect()->route('admin.department.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $datas = DB::table('departments')
            ->select([
                'id','code','name_kh','name_en','name_fr','description','phone','email','address','facebook',
                'gplus','twitter','youtube','logo','headline','about_dept','mission','vision','contact_us'
            ]);

        $datatables =  app('datatables')->of($datas);


        return $datatables
            ->addColumn('name', function ($data) {
                return "<p>".$data->name_kh."</p><p>".$data->name_en."</p><p>".$data->name_fr."</p><p>".$data->code."</p>";
            })
            ->addColumn('contact', function ($data) {
                return "<i class='fa fa-phone'></i>".$data->phone."<br/><i class='fa fa-internet-explorer'></i> ".$data->email."<br/><i class='fa fa-facebook-square'></i>".$data->facebook.$data->gplus.$data->twitter.$data->youtube;
            })
            ->addColumn('action', function ($data) {
                return
                '<a href="'.route('admin.department.edit',$data->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.department.destroy', $data->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}