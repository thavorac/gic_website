<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Gallery\DeleteGalleryRequest;
use App\Http\Requests\Backend\Gallery\StoreGalleryRequest;
use App\Http\Requests\Backend\Gallery\UpdateGalleryRequest;
use App\Repositories\Backend\Gallery\GalleryRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class GalleryController
 * @package App\Http\Controllers\Backend
 */
class GalleryController extends Controller
{
    protected $galleries;

    public function __construct(
        GalleryRepositoryContract $galleryRepo
    )
    {
        $this->galleries = $galleryRepo;
    }
    
    public function index()
    {
        return view('backend.gallery.index');
    }

    public function create()
    {

        return view('backend.gallery.create');
    }

    public function store(StoreGalleryRequest $request)
    {
        $this->galleries->create($request->all());
        return redirect()->route('admin.gallery.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $gallery = $this->galleries->findOrThrowException($id);
        return view('backend.gallery.edit',compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, $id)
    {
        $this->galleries->update($id, $request->all());
        return redirect()->route('admin.gallery.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteGalleryRequest $request, $id)
    {
        $this->galleries->destroy($id);
        return redirect()->route('admin.gallery.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $galleries = DB::table('galleries')
            ->select(['id','title','description','image','belong_to','belong_to_id','level']);

        $datatables =  app('datatables')->of($galleries);


        return $datatables
            ->addColumn('action', function ($gallery) {
                return  '<a href="'.route('admin.gallery.edit',$gallery->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.gallery.destroy', $gallery->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}