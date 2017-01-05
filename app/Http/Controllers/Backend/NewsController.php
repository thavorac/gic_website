<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\News\DeleteNewsRequest;
use App\Http\Requests\Backend\News\StoreNewsRequest;
use App\Http\Requests\Backend\News\UpdateNewsRequest;
use App\Repositories\Backend\News\NewsRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class NewsController
 * @package App\Http\Controllers\Backend
 */
class NewsController extends Controller
{
    protected $news;

    public function __construct(
        NewsRepositoryContract $newsRepo
    )
    {
        $this->news = $newsRepo;
    }
    
    public function index()
    {
        return view('backend.news.index');
    }

    public function create()
    {

        return view('backend.news.create');
    }

    public function store(StoreNewsRequest $request)
    {
        $this->news->create($request->all());
        return redirect()->route('admin.news.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $news = $this->news->findOrThrowException($id);
        return view('backend.news.edit',compact('news'));
    }

    public function update(UpdateNewsRequest $request, $id)
    {
        $this->news->update($id, $request->all());
        return redirect()->route('admin.news.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteNewsRequest $request, $id)
    {
        $this->news->destroy($id);
        return redirect()->route('admin.news.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $news = DB::table('news')
            ->select(['id','title','context']);

        $datatables =  app('datatables')->of($news);


        return $datatables
            ->addColumn('action', function ($news) {
                return  '<a href="'.route('admin.news.edit',$news->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.news.destroy', $news->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}