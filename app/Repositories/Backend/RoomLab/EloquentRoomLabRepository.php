<?php

namespace App\Repositories\Backend\RoomLab;


use App\Exceptions\GeneralException;
use App\Models\RoomLab;
use App\Repositories\Backend\RoomLab\RoomLabRepositoryContract;
use Carbon\Carbon;

/**
 * Class EloquentRoleRepository
 * @package App\Repositories\Role
 */
class EloquentRoomLabRepository implements RoomLabRepositoryContract
{
    /**
     * @param  $id
     * @throws GeneralException
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null|static
     */
    public function findOrThrowException($id)
    {
        if (! is_null(RoomLab::find($id))) {
            return RoomLab::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.general.not_found'));
    }

    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @return mixed
     */
    public function getRoomLabsPaginated($per_page, $order_by = 'sort', $sort = 'asc')
    {
        return RoomLab::orderBy($order_by, $sort)
            ->paginate($per_page);
    }

    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @return mixed
     */
    public function getAllRoomLabs($order_by = 'sort', $sort = 'asc')
    {
        return RoomLab::orderBy($order_by, $sort)
            ->get();
    }

    /**
     * @param  $input
     * @throws GeneralException
     * @return bool
     */
    public function create($input)
    {
        if (RoomLab::where('name', $input['name'])->first()) {
            throw new GeneralException(trans('exceptions.backend.general.already_exists'));
        }

        $input['created_at'] = Carbon::now();
        $input['create_uid'] = auth()->id();


        if (RoomLab::create($input)) {
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
