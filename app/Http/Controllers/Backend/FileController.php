<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\File\StoreFileRequest;
use App\Http\Requests\Backend\File\UpdateFileRequest;
use App\Repositories\Backend\File\FileRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class FileController
 * @package App\Http\Controllers\Backend
 */
class FileController extends Controller
{
    protected $files;

    public function __construct(
        FileRepositoryContract $fileRepo
    )
    {
        $this->files = $fileRepo;
    }
    public function index()
    {
        return view('backend.file.index');
    }

    public function create()
    {

        return view('backend.file.create');
    }

    public function store(StoreFileRequest $request)
    {
        $this->files->create($request->all());
        return redirect()->route('admin.file.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $file = $this->files->findOrThrowException($id);
        return view('backend.file.edit',compact('file'));
    }

    public function update(UpdateFileRequest $request, $id)
    {
        $this->files->update($id, $request->all());
        return redirect()->route('admin.file.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy($id)
    {
        $this->files->destroy($id);
        return redirect()->route('admin.file.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $files = DB::table('files')
            ->select(['id','name','url','description']);

        $datatables =  app('datatables')->of($files);


        return $datatables
            ->addColumn('action', function ($file) {
                return  '<a href="'.route('admin.file.edit',$file->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.file.destroy', $file->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}