<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\RoomLab\DeleteRoomLabRequest;
use App\Http\Requests\Backend\RoomLab\StoreRoomLabRequest;
use App\Http\Requests\Backend\RoomLab\UpdateRoomLabRequest;
use App\Models\Department;
use App\Repositories\Backend\RoomLab\RoomLabRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class RoomLabController
 * @package App\Http\Controllers\Backend
 */
class RoomLabController extends Controller
{
    protected $room_labs;

    public function __construct(
        RoomLabRepositoryContract $room_labRepo
    )
    {
        $this->room_labs = $room_labRepo;
    }
    public function index()
    {
        return view('backend.room_lab.index');
    }

    public function create()
    {
        $departments = Department::lists('name_kh','id');
        return view('backend.room_lab.create',compact('departments'));
    }

    public function store(StoreRoomLabRequest $request)
    {
        $this->room_labs->create($request->all());
        return redirect()->route('admin.room_lab.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $room_lab = $this->room_labs->findOrThrowException($id);
        return view('backend.room_lab.edit',compact('room_lab'));
    }

    public function update(UpdateRoomLabRequest $request, $id)
    {
        $this->room_labs->update($id, $request->all());
        return redirect()->route('admin.room_lab.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteRoomLabRequest $request, $id)
    {
        $this->room_labs->destroy($id);
        return redirect()->route('admin.room_lab.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $room_labs = DB::table('room_labs')
            ->select(['id','name','about','person_in_charge','description','department_id']);

        $datatables =  app('datatables')->of($room_labs);


        return $datatables
            ->addColumn('action', function ($room_lab) {
                return  '<a href="'.route('admin.room_lab.edit',$room_lab->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.room_lab.destroy', $room_lab->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}