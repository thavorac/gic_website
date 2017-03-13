<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Employee\DeleteEmployeeRequest;
use App\Http\Requests\Backend\Employee\StoreEmployeeRequest;
use App\Http\Requests\Backend\Employee\UpdateEmployeeRequest;
use App\Repositories\Backend\Employee\EmployeeRepositoryContract;
use Carbon\Carbon;
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
        $input = $request->all();

        if(!isset($input['stop_working_date']) || $input['stop_working_date'] == "") {
            $input['stop_working_date'] = null;
        }

        $input["create_uid"] = auth()->user()->id;
        $input["created_at"] = Carbon::now();

        $this->employees->create($input);
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
            ->select([
                'id',
                'name_kh',
                'name_latin',
                'photo','dob',
                'start_working_date',
                'stop_working_date',
                'address',
                'phone',
                'email',
                'cv',
                'about_me',
                'interest']);

        $datatables =  app('datatables')->of($employees);


        return $datatables
            ->addColumn('info', function ($employee) {
                ob_start();
                ?>
                <div class="row">

                    <div class="col-md-12">
                        <div class="media block-update-card">
                            <a class="pull-left" href="#">
                                <img class="media-object update-card-MDimentions" src="<?php echo $employee->photo ?>" alt="...">
                            </a>
                            <div class="media-body update-card-body">
                                <h4 class="media-heading"><?php echo $employee->name_kh ?></h4>
                                <p><?php echo $employee->name_latin ?></p>
                                <p><?php echo $employee->address ?></p>
                            </div>
                        </div>

                        <div class="block-update-card status">
                            <div class="h-status">
                            </div>
                            <div class="update-card-body">
                                <h4>Vinothbabu K</h4>
                                <p>This is me. I am a Good Boy.This is the body content of this media.This can be
                                    used as an update panel.</p>
                            </div>
                            <div class="card-action-pellet btn-toolbar pull-right" role="toolbar">

                                <div data-remote="<?php echo route('admin.employee.edit', $employee->id) ?>"
                                     class="btn-group fa fa-pencil btn-edit"
                                     data-toggle="tooltip" data-placement="top" title="<?php echo trans('buttons.general.crud.edit') ?>">
                                </div>
                                <div data-remote="<?php echo route('admin.employee.destroy', $employee->id) ?>"
                                     class="btn-group fa fa-times btn-delete"
                                     data-toggle="tooltip" data-placement="top" title="<?php echo trans('buttons.general.crud.delete') ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php
                $html = ob_get_clean();
                return $html;
            })
            ->addColumn('action', function ($employee) {
                return  '<a href="'.route('admin.employee.edit',$employee->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.employee.destroy', $employee->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}