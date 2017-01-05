<?php

namespace App\Repositories\Backend\Department;


use App\Exceptions\GeneralException;
use App\Models\Department;
use App\Repositories\Backend\Department\DepartmentRepositoryContract;
use Carbon\Carbon;

/**
 * Class EloquentRoleRepository
 * @package App\Repositories\Role
 */
class EloquentDepartmentRepository implements DepartmentRepositoryContract
{
    /**
     * @param  $id
     * @throws GeneralException
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null|static
     */
    public function findOrThrowException($id)
    {
        if (! is_null(Department::find($id))) {
            return Department::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.general.not_found'));
    }

    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @return mixed
     */
    public function getDepartmentsPaginated($per_page, $order_by = 'sort', $sort = 'asc')
    {
        return Department::orderBy($order_by, $sort)
            ->paginate($per_page);
    }

    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @return mixed
     */
    public function getAllDepartments($order_by = 'sort', $sort = 'asc')
    {
        return Department::orderBy($order_by, $sort)
            ->get();
    }

    /**
     * @param  $request
     * @throws GeneralException
     * @return bool
     */
    public function create($request)
    {
        $input = $request->all();
        if (Department::where('name_en', $input['name_en'])->first()) {
            throw new GeneralException(trans('exceptions.backend.general.already_exists'));
        }

        $input['created_at'] = Carbon::now();
        $input['create_uid'] = auth()->id();

        // Logo
        if($request->file('logo')!= null){
            $imageName = $input['created_at']->timestamp . '.' .$request->file('logo')->getClientOriginalExtension();
            $input['logo'] = $imageName;
            $request->file('logo')->move(
                base_path() . '/public/img/files/', $imageName
            );
        }

        if (Department::create($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.general.create_error'));
    }

    /**
     * @param  $id
     * @param  $request
     * @throws GeneralException
     * @return bool
     */
    public function update($id, $request)
    {
        $input = $request->all();
        $department = $this->findOrThrowException($id);

        $input['updated_at'] = Carbon::now();
        $input['write_uid'] = auth()->id();

        // Logo
        if($request->file('logo')!= null){
            $imageName = $department->created_at->timestamp . '.' .$request->file('logo')->getClientOriginalExtension();
            $input['logo'] = $imageName;
            $request->file('logo')->move(
                base_path() . '/public/img/files/', $imageName
            );
        }

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
