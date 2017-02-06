<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Gallery\DeleteGalleryRequest;
use App\Http\Requests\Backend\Gallery\StoreGalleryRequest;
use App\Http\Requests\Backend\Gallery\UpdateGalleryRequest;
use App\Models\GalleryImage;
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
        $this->galleries->create($request);
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
            ->select(['id','title','description','belong_to','belong_to_id','level']);

        $datatables =  app('datatables')->of($galleries);


        return $datatables
            ->editColumn('title', function($gallery) {
                ob_start();
                ?>
                <h2><?php echo $gallery->title ?></h2>
                <p><?php echo $gallery->description ?></p>
                <?php
                $html = ob_get_clean();
                return $html;

            })
            ->addColumn("images", function($gallery) {
                $images = GalleryImage::where("gallery_id",$gallery->id)->get();
                //dd(url('files/images/gallery/'.$images->first()->image));
                ob_start();
                ?>

                <div class="file-preview-thumbnails">
                    <div class="file-live-thumbs">
                        <?php
                        $index = 0;
                        foreach($images as $image) {

                            ?>
                            <div class="file-preview-frame" id="<?php echo "preview-".$image->id."-".$index ?>" data-fileindex="<?php echo $index ?>"
                                 data-template="image">
                                <div class="kv-file-content">
                                    <img src="<?php echo url('files/images/gallery/'.$image->image) ?>" class="kv-preview-data file-preview-image"
                                         title="user_man_2.svg" alt="user_man_2.svg"
                                         style="width:auto;height:160px;">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-footer-caption" title="user_man_2.svg"><?php echo $image->image ?></div>
                                </div>
                            </div>
                        <?php
                        }
                        $index++;
                        ?>

                    </div>
                </div>

                <?php
                $html = ob_get_clean();
                return $html;
            })
            ->addColumn('action', function ($gallery) {
                return  '<a href="'.route('admin.gallery.edit',$gallery->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.gallery.destroy', $gallery->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}