<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Partner\DeletePartnerRequest;
use App\Http\Requests\Backend\Partner\StorePartnerRequest;
use App\Http\Requests\Backend\Partner\UpdatePartnerRequest;
use App\Models\PartnerType;
use App\Repositories\Backend\Partner\PartnerRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class PartnerController
 * @package App\Http\Controllers\Backend
 */
class PartnerController extends Controller
{
    protected $partners;

    public function __construct(
        PartnerRepositoryContract $partnerRepo
    )
    {
        $this->partners = $partnerRepo;
    }
    public function index()
    {
        return view('backend.partner.index');
    }

    public function create()
    {
        $partner_types = PartnerType::lists('name','id');
        return view('backend.partner.create',compact('partner_types'));
    }

    public function store(StorePartnerRequest $request)
    {
        $this->partners->create($request->all());
        return redirect()->route('admin.partner.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $partner = $this->partners->findOrThrowException($id);
        return view('backend.partner.edit',compact('partner'));
    }

    public function update(UpdatePartnerRequest $request, $id)
    {
        $this->partners->update($id, $request->all());
        return redirect()->route('admin.partner.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeletePartnerRequest $request, $id)
    {
        $this->partners->destroy($id);
        return redirect()->route('admin.partner.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $partners = DB::table('partners')
            ->select(['id','name','logo','url','mou','description','partner_type_id']);

        $datatables =  app('datatables')->of($partners);


        return $datatables
            ->addColumn('action', function ($partner) {
                return  '<a href="'.route('admin.partner.edit',$partner->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.partner.destroy', $partner->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}