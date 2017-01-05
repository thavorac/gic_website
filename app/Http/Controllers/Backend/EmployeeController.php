<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Employee\DeleteEmployeeRequest;
use App\Http\Requests\Backend\Employee\StoreEmployeeRequest;
use App\Http\Requests\Backend\Employee\UpdateEmployeeRequest;
use App\Repositories\Backend\Employee\EmployeeRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class EmployeeController
 * @package App\Http\Controllers\Backend
 */
class EmployeeController extends Controller
{
    protected $employees;

    public function __construct(
        EmployeeRepositoryContract $employeeRepo
    )
    {
        $this->employees = $employeeRepo;
    }
    public function index()
    {
        return view('backend.employee.index');
    }

    public function create()
    {

        return view('backend.employee.create');
    }

    public function store(StoreEmployeeRequest $request)
    {
        $this->employees->create($request->all());
        return redirect()->route('admin.employee.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $employee = $this->employees->findOrThrowException($id);
        return view('backend.employee.edit',compact('employee'));
    }

    public function update(UpdateEmployeeRequest $request, $id)
    {
        $this->employees->update($id, $request->all());
        return redirect()->route('admin.employee.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteEmployeeRequest $request, $id)
    {
        $this->employees->destroy($id);
        return redirect()->route('admin.employee.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $employees = DB::table('employees')
            ->select(['id','name_kh','name_latin','photo','dob','start_working_date','stop_working_date','cv','about_me','interest']);

        $datatables =  app('datatables')->of($employees);


        return $datatables
            ->addColumn('action', function ($employee) {
                return  '<a href="'.route('admin.employee.edit',$employee->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.employee.destroy', $employee->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}