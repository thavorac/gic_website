<?php

namespace App\Repositories\Backend\StudentMessage;


use App\Exceptions\GeneralException;
use App\Models\StudentMessage;
use App\Repositories\Backend\StudentMessage\StudentMessageRepositoryContract;
use Carbon\Carbon;

/**
 * Class EloquentRoleRepository
 * @package App\Repositories\Role
 */
class EloquentStudentMessageRepository implements StudentMessageRepositoryContract
{
    /**
     * @param  $id
     * @throws GeneralException
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null|static
     */
    public function findOrThrowException($id)
    {
        if (! is_null(StudentMessage::find($id))) {
            return StudentMessage::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.general.not_found'));
    }

    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @return mixed
     */
    public function getStudentMessagesPaginated($per_page, $order_by = 'sort', $sort = 'asc')
    {
        return StudentMessage::orderBy($order_by, $sort)
            ->paginate($per_page);
    }

    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @return mixed
     */
    public function getAllStudentMessages($order_by = 'sort', $sort = 'asc')
    {
        return StudentMessage::orderBy($order_by, $sort)
            ->get();
    }

    /**
     * @param  $input
     * @throws GeneralException
     * @return bool
     */
    public function create($input)
    {
        $input['post_date'] = Carbon::now();
        $input['student_id'] = auth()->id();
        $input['created_at'] = Carbon::now();
        $input['create_uid'] = auth()->id();


        if (StudentMessage::create($input)) {
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
