<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StudentMessage\DeleteStudentMessageRequest;
use App\Http\Requests\Backend\StudentMessage\StoreStudentMessageRequest;
use App\Http\Requests\Backend\StudentMessage\UpdateStudentMessageRequest;
use App\Repositories\Backend\StudentMessage\StudentMessageRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class StudentMessageController
 * @package App\Http\Controllers\Backend
 */
class StudentMessageController extends Controller
{
    protected $student_messages;

    public function __construct(
        StudentMessageRepositoryContract $student_messageRepo
    )
    {
        $this->student_messages = $student_messageRepo;
    }
    public function index()
    {
        return view('backend.student_message.index');
    }

    public function create()
    {

        return view('backend.student_message.create');
    }

    public function store(StoreStudentMessageRequest $request)
    {
        $this->student_messages->create($request->all());
        return redirect()->route('admin.student_message.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $student_message = $this->student_messages->findOrThrowException($id);
        return view('backend.student_message.edit',compact('student_message'));
    }

    public function update(UpdateStudentMessageRequest $request, $id)
    {
        $this->student_messages->update($id, $request->all());
        return redirect()->route('admin.student_message.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteStudentMessageRequest $request,$id)
    {
        $this->student_messages->destroy($id);
        return redirect()->route('admin.student_message.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $student_messages = DB::table('student_messages')
            ->select(['id','message','post_date','student_id']);

        $datatables =  app('datatables')->of($student_messages);


        return $datatables
            ->addColumn('action', function ($student_message) {
                return  '<a href="'.route('admin.student_message.edit',$student_message->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.student_message.destroy', $student_message->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}