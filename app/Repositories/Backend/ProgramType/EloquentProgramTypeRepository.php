<?php

namespace App\Repositories\Backend\ProgramType;


use App\Exceptions\GeneralException;
use App\Models\ProgramType;
use App\Repositories\Backend\ProgramType\ProgramTypeRepositoryContract;
use Carbon\Carbon;

/**
 * Class EloquentRoleRepository
 * @package App\Repositories\Role
 */
class EloquentProgramTypeRepository implements ProgramTypeRepositoryContract
{
    /**
     * @param  $id
     * @throws GeneralException
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null|static
     */
    public function findOrThrowException($id)
    {
        if (! is_null(ProgramType::find($id))) {
            return ProgramType::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.general.not_found'));
    }

    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @return mixed
     */
    public function getProgramTypesPaginated($per_page, $order_by = 'sort', $sort = 'asc')
    {
        return ProgramType::orderBy($order_by, $sort)
            ->paginate($per_page);
    }

    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @return mixed
     */
    public function getAllProgramTypes($order_by = 'sort', $sort = 'asc')
    {
        return ProgramType::orderBy($order_by, $sort)
            ->get();
    }

    /**
     * @param  $input
     * @throws GeneralException
     * @return bool
     */
    public function create($input)
    {
        if (ProgramType::where('name', $input['name'])->first()) {
            throw new GeneralException(trans('exceptions.backend.general.already_exists'));
        }

        $input['created_at'] = Carbon::now();
        $input['create_uid'] = auth()->id();


        if (ProgramType::create($input)) {
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
