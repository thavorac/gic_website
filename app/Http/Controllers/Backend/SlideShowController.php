<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

/**
 * Class SlideShowController
 * @package App\Http\Controllers\Backend
 */
class SlideShowController extends Controller
{

    public function index()
    {
        return view('backend.slideshow.index');
    }

    public function create()
    {

        return view('backend.slideshow.create');
    }

    public function store(Request $request)
    {

        return redirect()->route('admin.slideshow.index')->withFlashSuccess(trans('alerts.backend.roles.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //$department = $this->departments->findOrThrowException($id);
        return view('backend.slideshow.edit');
    }

    public function update(Request $request, $id)
    {
        //$this->departments->update($id, $request->all());
        return redirect()->route('admin.slideshow.index')->withFlashSuccess(trans('alerts.backend.generals.updated'));
    }

    public function destroy($id)
    {
        //$this->departments->destroy($id);
        return redirect()->route('admin.slideshow.index')->withFlashSuccess(trans('alerts.backend.generals.deleted'));
    }

    public function data()
    {

        $slideshows = DB::table('slideshows')
            ->select(['id','code','name_kh','name_en','name_fr']);

        $datatables =  app('datatables')->of($slideshows);


        return $datatables
            ->editColumn('id', '{!! str_limit($id, 60) !!}')
            ->editColumn('code', '{!! str_limit($code, 60) !!}')
            ->editColumn('name_kh', '{!! str_limit($name_kh, 60) !!}')
            ->editColumn('name_en', '{!! str_limit($name_en, 60) !!}')
            ->editColumn('name_fr', '{!! str_limit($name_fr, 60) !!}')
            ->addColumn('action', function ($department) {
                return  '<a href="'.route('admin.configuration.departments.edit',$department->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.configuration.departments.destroy', $department->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}