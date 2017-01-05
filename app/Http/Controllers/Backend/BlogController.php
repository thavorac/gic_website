<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Blog\StoreBlogRequest;
use App\Http\Requests\Backend\Blog\UpdateBlogRequest;
use App\Repositories\Backend\Blog\BlogRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class BlogController
 * @package App\Http\Controllers\Backend
 */
class BlogController extends Controller
{
    protected $blogs;

    public function __construct(
        BlogRepositoryContract $blogRepo
    )
    {
        $this->blogs = $blogRepo;
    }
    
    public function index()
    {
        return view('backend.blog.index');
    }

    public function create()
    {

        return view('backend.blog.create');
    }

    public function store(StoreBlogRequest $request)
    {
        $this->blogs->create($request->all());
        return redirect()->route('admin.blog.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $blog = $this->blogs->findOrThrowException($id);
        return view('backend.blog.edit',compact('blog'));
    }

    public function update(UpdateBlogRequest $request, $id)
    {
        $this->blogs->update($id, $request->all());
        return redirect()->route('admin.blog.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy($id)
    {
        $this->blogs->destroy($id);
        return redirect()->route('admin.blog.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $blogs = DB::table('blogs')
            ->select(['id','title','content','image','belong_to','belong_to_id','status']);

        $datatables =  app('datatables')->of($blogs);


        return $datatables
            ->addColumn('action', function ($blog) {
                return  '<a href="'.route('admin.blog.edit',$blog->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.blog.destroy', $blog->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}