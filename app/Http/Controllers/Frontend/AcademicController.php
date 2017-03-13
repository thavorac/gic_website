<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\SlideShow;
use App\Models\Student;
use App\Models\Timetable;

/**
 * Class AcademicController
 * @package App\Http\Controllers
 */
class AcademicController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.about',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function list_courses()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.courses.list_courses',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function course($id)
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.courses.course',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function timetable($year)
    {
        $raw_timetables = Timetable::join('academic_years','timetables.academic_year_id','=','academic_years.id')
                        ->select([
                            'academic_years.description as academic_year',
                            'timetables.name as time_table_name',
                            'timetables.trimester',
                            'timetables.file',
                        ])
                        ->get();

        $timetables_by_year = Timetable::join('academic_years','timetables.academic_year_id','=','academic_years.id')
            ->where('academic_years.year',$year)
            ->select([
                'academic_years.description as academic_year',
                'timetables.name as time_table_name',
                'timetables.trimester',
                'timetables.file',
                'timetables.id'
            ])
            ->orderBy('timetables.trimester')
            ->get();

        $timetables = array();

        foreach($raw_timetables as $raw){
            if(!isset($timetables[$raw->academic_year])){
                $timetables[$raw->academic_year] = array();
            }

            array_push($timetables[$raw->academic_year],$raw);
        }

        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.timetables',compact('department','timetables','timetables_by_year'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function list_students($promotion)
    {
        $promotions = Student::select('promotion')->orderBy('promotion','DESC')->groupBy('promotion')->get()->toArray();

        if($promotion == "latest"){
            $promotion = $promotions[0]['promotion'];
        }

        $students = Student::where('promotion',$promotion)->get();
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.students.list_students',compact('department','students','promotions','promotion'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function student($id)
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.students.student',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function scholarships()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.scholarships',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function scholarship_winners()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.scholarship_winners',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function programs()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.programs',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function missions()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.academic.missions',compact('department'));
    }
}
