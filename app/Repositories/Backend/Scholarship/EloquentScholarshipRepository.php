<?php

namespace App\Repositories\Backend\Scholarship;


use App\Exceptions\GeneralException;
use App\Models\Scholarship;
use App\Repositories\Backend\Scholarship\ScholarshipRepositoryContract;
use Carbon\Carbon;

/**
 * Class EloquentRoleRepository
 * @package App\Repositories\Role
 */
class EloquentScholarshipRepository implements ScholarshipRepositoryContract
{
    /**
     * @param  $id
     * @throws GeneralException
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null|static
     */
    public function findOrThrowException($id)
    {
        if (! is_null(Scholarship::find($id))) {
            return Scholarship::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.general.not_found'));
    }

    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @return mixed
     */
    public function getScholarshipsPaginated($per_page, $order_by = 'sort', $sort = 'asc')
    {
        return Scholarship::orderBy($order_by, $sort)
            ->paginate($per_page);
    }

    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @return mixed
     */
    public function getAllScholarships($order_by = 'sort', $sort = 'asc')
    {
        return Scholarship::orderBy($order_by, $sort)
            ->get();
    }

    /**
     * @param  $input
     * @throws GeneralException
     * @return bool
     */
    public function create($input)
    {
        if (Scholarship::where('name', $input['name'])->first()) {
            throw new GeneralException(trans('exceptions.backend.general.already_exists'));
        }

        $input['created_at'] = Carbon::now();
        $input['create_uid'] = auth()->id();


        if (Scholarship::create($input)) {
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

        $scholarship_winners = $model->scholarship_winners->toArray();
        if(!empty($scholarship_winners)){
            return false;
        }

        if ($model->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.general.delete_error'));
    }


}
