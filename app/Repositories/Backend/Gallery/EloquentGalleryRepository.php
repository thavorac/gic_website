<?php

namespace App\Repositories\Backend\Gallery;


use App\Exceptions\GeneralException;
use App\Models\File;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Repositories\Backend\Gallery\GalleryRepositoryContract;
use Carbon\Carbon;

/**
 * Class EloquentRoleRepository
 * @package App\Repositories\Role
 */
class EloquentGalleryRepository implements GalleryRepositoryContract
{
    /**
     * @param  $id
     * @throws GeneralException
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null|static
     */
    public function findOrThrowException($id)
    {
        if (! is_null(Gallery::find($id))) {
            return Gallery::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.general.not_found'));
    }

    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @return mixed
     */
    public function getGallerysPaginated($per_page, $order_by = 'sort', $sort = 'asc')
    {
        return Gallery::orderBy($order_by, $sort)
            ->paginate($per_page);
    }

    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @return mixed
     */
    public function getAllGallerys($order_by = 'sort', $sort = 'asc')
    {
        return Gallery::orderBy($order_by, $sort)
            ->get();
    }

    /**
     * @param  $request
     * @throws GeneralException
     * @return bool
     */
    public function create($request)
    {
        $success = false;

        $input = $request->all();
        $input['created_at'] = Carbon::now();
        $input['create_uid'] = auth()->id();

        if($gallery = Gallery::create($input)){
            $success = true;
        }

        // Logo
        if($request->file('image')!= null){
            $ids = [];
            // There are some images, so store to files first.
            foreach($request->file('image') as $file){
                $now = Carbon::now();
                $imageName = $now->timestamp."_".trim(strtolower($file->getClientOriginalName()));
                $file->move(
                    base_path() . '/public/files/images/gallery/', $imageName
                );

                $image = new GalleryImage();
                $image->image = $imageName;
                $image->gallery_id = $gallery->id;

                if($image->save()){
                    $success = true;
                }
            }
        }

        if ($success) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.general.create_error'));
    }

    /**
     * @param  $id
     * @param  $input
     * @throws GeneralException
     * @return bool
     */
    public function update($id, $input)
    {
        $department = $this->findOrThrowException($id);


        $input['updated_at'] = Carbon::now();
        $input['write_uid'] = auth()->id();

        if ($department->update($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.general.update_error'));
    }

    /**
     * @param  $id
     * @throws GeneralException
     * @return bool
     */
    public function destroy($id)
    {

        $model = $this->findOrThrowException($id);

        if ($model->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.general.delete_error'));
    }


}
