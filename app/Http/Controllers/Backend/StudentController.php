<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Student\DeleteStudentRequest;
use App\Http\Requests\Backend\Student\StoreStudentRequest;
use App\Http\Requests\Backend\Student\UpdateStudentRequest;
use App\Models\Department;
use App\Repositories\Backend\Student\StudentRepositoryContract;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class StudentController
 * @package App\Http\Controllers\Backend
 */
class StudentController extends Controller
{
    protected $students;

    public function __construct(
        StudentRepositoryContract $studentRepo
    )
    {
        $this->students = $studentRepo;
    }
    public function index()
    {
        return view('backend.student.index');
    }

    public function create()
    {
        $departments = Department::lists('name_kh','id');
        return view('backend.student.create',compact('departments'));
    }

    public function store(StoreStudentRequest $request)
    {
        $this->students->create($request->all());
        return redirect()->route('admin.student.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $student = $this->students->findOrThrowException($id);
        return view('backend.student.edit',compact('student'));
    }

    public function update(UpdateStudentRequest $request, $id)
    {
        $this->students->update($id, $request->all());
        return redirect()->route('admin.student.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteStudentRequest $request, $id)
    {
        $this->students->destroy($id);
        return redirect()->route('admin.student.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $students = DB::table('students')
            ->leftJoin('departments','students.department_id','=','departments.id')
            ->select([
                'students.id','students.name_kh','students.name_latin',
                'students.photo','students.dob','students.personal_phone',
                'students.parent_phone','students.email','students.id_card',
                'students.address','students.description','students.about',
                'departments.name_kh as department'
            ]);

        $datatables =  app('datatables')->of($students);


        return $datatables
            ->addColumn('general_info', function($student) {
                ob_start();
                ?>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo $student->photo ?>" width="100%" />
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12">
                               <b><?php echo $student->name_kh ?></b> / <?php echo $student->name_latin ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php echo $student->id_card ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php echo $student->department ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php echo Carbon::createFromFormat("Y-m-d",$student->dob)->toFormattedDateString() ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-12">
                        <?php echo $student->address ?>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-5">
                                <label><?php echo trans('labels.backend.student.fields.personal_phone') ?></label>
                            </div>
                            <div class="col-sm-7">
                                <?php echo $student->personal_phone ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-5">
                                <label><?php echo trans('labels.backend.student.fields.parent_phone') ?></label>
                            </div>
                            <div class="col-sm-7">
                                <?php echo $student->parent_phone ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $html = ob_get_clean();
                return $html;
            })
//            ->addColumn('contact', function($student) {
//                return "<p>".$student->address."</p>".$student->personal_phone."<br/>".$student->parent_phone;
//            })
            ->addColumn('action', function ($student) {
                return  '<a href="'.route('admin.student.edit',$student->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.student.destroy', $student->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}