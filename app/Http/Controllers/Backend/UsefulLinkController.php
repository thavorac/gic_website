<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UsefulLink\DeleteUsefulLinkRequest;
use App\Http\Requests\Backend\UsefulLink\StoreUsefulLinkRequest;
use App\Http\Requests\Backend\UsefulLink\UpdateUsefulLinkRequest;
use App\Repositories\Backend\UsefulLink\UsefulLinkRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class UsefulLinkController
 * @package App\Http\Controllers\Backend
 */
class UsefulLinkController extends Controller
{
    protected $useful_links;

    public function __construct(
        UsefulLinkRepositoryContract $useful_linkRepo
    )
    {
        $this->useful_links = $useful_linkRepo;
    }
    public function index()
    {
        return view('backend.useful_link.index');
    }

    public function create()
    {

        return view('backend.useful_link.create');
    }

    public function store(StoreUsefulLinkRequest $request)
    {
        $this->useful_links->create($request->all());
        return redirect()->route('admin.useful_link.index')->withFlashSuccess(trans('alerts.backend.roles.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $useful_link = $this->useful_links->findOrThrowException($id);
        return view('backend.useful_link.edit',compact('useful_link'));
    }

    public function update(UpdateUsefulLinkRequest $request, $id)
    {
        $this->useful_links->update($id, $request->all());
        return redirect()->route('admin.useful_link.index')->withFlashSuccess(trans('alerts.backend.generals.updated'));
    }

    public function destroy(DeleteUsefulLinkRequest $request, $id)
    {
        $this->useful_links->destroy($id);
        return redirect()->route('admin.useful_link.index')->withFlashSuccess(trans('alerts.backend.generals.deleted'));
    }

    public function data()
    {

        $useful_links = DB::table('useful_links')
            ->select(['id','name','url','description']);

        $datatables =  app('datatables')->of($useful_links);


        return $datatables
            ->addColumn('action', function ($useful_link) {
                return  '<a href="'.route('admin.useful_link.edit',$useful_link->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.useful_link.destroy', $useful_link->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}