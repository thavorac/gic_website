<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Slideshow\DeleteSlideshowRequest;
use App\Http\Requests\Backend\Slideshow\StoreSlideshowRequest;
use App\Http\Requests\Backend\Slideshow\UpdateSlideshowRequest;
use App\Repositories\Backend\Slideshow\SlideshowRepositoryContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

/**
 * Class SlideShowController
 * @package App\Http\Controllers\Backend
 */
class SlideShowController extends Controller
{

    protected $slideshows;

    public function __construct(
        SlideshowRepositoryContract $slideshowRepo
    )
    {
        $this->slideshows = $slideshowRepo;
    }

    public function index()
    {
        return view('backend.slideshow.index');
    }

    public function create()
    {

        return view('backend.slideshow.create');
    }

    public function store(StoreSlideshowRequest $request)
    {
        $this->slideshows->create($request->all());
        return redirect()->route('admin.slideshow.index')->withFlashSuccess(trans('alerts.backend.roles.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $slideshow = $this->slideshows->findOrThrowException($id);
        return view('backend.slideshow.edit',compact('slideshow'));
    }

    public function update(UpdateSlideshowRequest $request, $id)
    {
        $this->slideshows->update($id, $request->all());
        return redirect()->route('admin.slideshow.index')->withFlashSuccess(trans('alerts.backend.generals.updated'));
    }

    public function destroy(DeleteSlideshowRequest $request, $id)
    {
        $this->slideshows->destroy($id);
        return redirect()->route('admin.slideshow.index')->withFlashSuccess(trans('alerts.backend.generals.deleted'));
    }

    public function data()
    {

        $slideshows = DB::table('slide_shows')
            ->select([
                'id',
                'image',
                'title',
                'description',
                'page_url',
                'reference_text',
                'reference_link'
            ]);

        $datatables =  app('datatables')->of($slideshows);


        return $datatables
            ->editColumn('image', function ($slideshow) {
                return "<img src='".$slideshow->image."' width='100%'/>";
            })
            ->addColumn('about', function ($slideshow) {
                return "<b>".$slideshow->title."</b><br/><p>".$slideshow->description."</p>";
            })
            ->addColumn('reference', function($slideshow) {
                return "<b>".$slideshow->reference_text."</b><br/>".$slideshow->reference_link;
            })
            ->addColumn('action', function ($slideshow) {
                return  '<a href="'.route('admin.slideshow.edit',$slideshow->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.slideshow.destroy', $slideshow->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}