<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PartnerType\DeletePartnerTypeRequest;
use App\Http\Requests\Backend\PartnerType\StorePartnerTypeRequest;
use App\Http\Requests\Backend\PartnerType\UpdatePartnerTypeRequest;
use App\Models\PartnerTypeType;
use App\Repositories\Backend\PartnerType\PartnerTypeRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class PartnerTypeController
 * @package App\Http\Controllers\Backend
 */
class PartnerTypeController extends Controller
{
    protected $partner_types;

    public function __construct(
        PartnerTypeRepositoryContract $partner_typeRepo
    )
    {
        $this->partner_types = $partner_typeRepo;
    }
    public function index()
    {
        return view('backend.partner_type.index');
    }

    public function create()
    {
        return view('backend.partner_type.create');
    }

    public function store(StorePartnerTypeRequest $request)
    {
        $this->partner_types->create($request->all());
        return redirect()->route('admin.partner_type.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $partner_type = $this->partner_types->findOrThrowException($id);
        return view('backend.partner_type.edit',compact('partner_type'));
    }

    public function update(UpdatePartnerTypeRequest $request, $id)
    {
        $this->partner_types->update($id, $request->all());
        return redirect()->route('admin.partner_type.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeletePartnerTypeRequest $request, $id)
    {
        $this->partner_types->destroy($id);
        return redirect()->route('admin.partner_type.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $partner_types = DB::table('partner_types')
            ->select(['id','name','description']);

        $datatables =  app('datatables')->of($partner_types);


        return $datatables
            ->addColumn('action', function ($partner_type) {
                return  '<a href="'.route('admin.partner_type.edit',$partner_type->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.partner_type.destroy', $partner_type->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}