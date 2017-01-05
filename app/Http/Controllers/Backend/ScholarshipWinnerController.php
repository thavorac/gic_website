<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ScholarshipWinner\DeleteScholarshipWinnerRequest;
use App\Http\Requests\Backend\ScholarshipWinner\StoreScholarshipWinnerRequest;
use App\Http\Requests\Backend\ScholarshipWinner\UpdateScholarshipWinnerRequest;
use App\Models\Partner;
use App\Models\Scholarship;
use App\Repositories\Backend\ScholarshipWinner\ScholarshipWinnerRepositoryContract;
use Illuminate\Support\Facades\DB;

/**
 * Class ScholarshipWinnerController
 * @package App\Http\Controllers\Backend
 */
class ScholarshipWinnerController extends Controller
{
    protected $scholarship_winners;

    public function __construct(
        ScholarshipWinnerRepositoryContract $scholarship_winnerRepo
    )
    {
        $this->scholarship_winners = $scholarship_winnerRepo;
    }
    public function index()
    {
        return view('backend.scholarship_winner.index');
    }

    public function create()
    {
        $universities = Partner::lists('name','id');
        $scholarships = Scholarship::lists('name','id');
        return view('backend.scholarship_winner.create',compact('universities','scholarships'));
    }

    public function store(StoreScholarshipWinnerRequest $request)
    {
        $this->scholarship_winners->create($request->all());
        return redirect()->route('admin.scholarship_winner.index')->withFlashSuccess(trans('alerts.generals.created'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $scholarship_winner = $this->scholarship_winners->findOrThrowException($id);
        return view('backend.scholarship_winner.edit',compact('scholarship_winner'));
    }

    public function update(UpdateScholarshipWinnerRequest $request, $id)
    {
        $this->scholarship_winners->update($id, $request->all());
        return redirect()->route('admin.scholarship_winner.index')->withFlashSuccess(trans('alerts.generals.updated'));
    }

    public function destroy(DeleteScholarshipWinnerRequest $request, $id)
    {
        $this->scholarship_winners->destroy($id);
        return redirect()->route('admin.scholarship_winner.index')->withFlashSuccess(trans('alerts.generals.deleted'));
    }

    public function data()
    {

        $scholarship_winners = DB::table('scholarship_winners')
            ->select(['id','name_kh','name_latin','photo','degree','duration','description','is_staff','obtain_year','university','scholarship_id']);

        $datatables =  app('datatables')->of($scholarship_winners);


        return $datatables
            ->addColumn('action', function ($scholarship_winner) {
                return  '<a href="'.route('admin.scholarship_winner.edit',$scholarship_winner->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.trans('buttons.general.crud.edit').'"></i> </a>'.
                ' <button class="btn btn-xs btn-danger btn-delete" data-remote="'.route('admin.scholarship_winner.destroy', $scholarship_winner->id) .'"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></button>';
            })
            ->make(true);
    }
}