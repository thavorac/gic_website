<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Event\DeleteEventRequest;
use App\Http\Requests\Backend\Event\StoreEventRequest;
use App\Http\Requests\Backend\Event\UpdateEventRequest;
use App\Repositories\Backend\Event\EventRepositoryContract;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class EventController
 * @package App\Http\Controllers\Backend
 */
class EventController extends Controller
{
    protected $events;

    public function __construct(
        EventRepositoryContract $eventRepo
    )
    {
        $this->events = $eventRepo;
    }
    
    public function index()
    {
        return view('backend.event.index');
    }

    public function create()
    {

        return view('backend.event.create');
    }

    public function store(StoreEventRequest $request)
    {
        $this->events->create($request->all());
        return redirect()->route('admin.event.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $event = $this->events->findOrThrowException($id);
        return view('backend.event.edit',compact('event'));
    }

    public function update(UpdateEventRequest $request, $id)
    {
        $this->events->update($id, $request->all());
        return redirect()->route('admin.event.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteEventRequest $request, $id)
    {
        $this->events->destroy($id);
        return redirect()->route('admin.event.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $events = DB::table('events')
            ->select([
                'id',
                'name',
                'date_start',
                'date_end',
                'time_start',
                'time_end',
                'require_register',
                'pending',
                'file',
                'about'
            ]);

        $datatables =  app('datatables')->of($events);


        return $datatables
            ->editColumn('date_start', function($event) {
                return Carbon::createFromFormat('Y-m-d',$event->date_start)->format('d/m/Y')." - ".Carbon::createFromFormat('Y-m-d',$event->date_end)->format('d/m/Y');
            })
            ->editColumn('name', function($event) {
                return "<strong>".$event->name."</strong><br/>".$event->about;
            })
            ->editColumn('file', function($event) {
                return "<a href='".$event->file."'>Attached file</a>";
            })
            ->addColumn('action', function ($event) {
                return  '<a href="'.route('admin.event.edit',$event->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.event.destroy', $event->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}