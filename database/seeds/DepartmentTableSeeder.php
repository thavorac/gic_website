<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = array(
            array(
                'id'=>config('access.departments.department_study_affair'),
                'name_kh' => "Academic & Student's Affairs",
                'name_en' => "Academic & Student's Affairs",
                'name_fr' => "Academic & Student's Affairs",
                'code' => 'Study Office',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_finance'),
                'name_kh' => 'Finance',
                'name_en' => 'Finance',
                'name_fr' => 'Finance',
                'code' => 'Finance',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_academic'),
                'name_kh' => 'Academic',
                'name_en' => 'Academic',
                'name_fr' => 'Academic',
                'code' => 'Academic',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_gca'),
                'name_kh' => 'គីមីនិងចំណីអាហារ',
                'name_en' => 'Food Tech. & Chemical Engineering',
                'name_fr' => 'Food Tech. & Chemical Engineering',
                'code' => 'GCA',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_gci'),
                'name_kh' => 'សំណង់ស៊ីវីល',
                'name_en' => 'Civil Engineering & Architecture',
                'name_fr' => 'Civil Engineering & Architecture',
                'code' => 'GCI',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_gee'),
                'name_kh' => 'អគ្គីសនី ថាមពល និងទូរគមនគមន៍',
                'name_en' => 'Electrical & Energy Engineering',
                'name_fr' => 'Electrical & Energy Engineering',
                'code' => 'GEE',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_gic'),
                'name_kh' => 'ព័ត៌មានវិទ្យា និងទំនាក់ទំនង',
                'name_en' => 'Information and Communication Engineering',
                'name_fr' => 'Information and Communication Engineering',
                'code' => 'GIC',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_gim'),
                'name_kh' => 'ឧស្យាហកម្ម និងមេកានិច',
                'name_en' => 'Industrial & Mechanical Engineering',
                'name_fr' => 'Industrial & Mechanical Engineering',
                'code' => 'GIM',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_gru'),
                'name_kh' => 'ជនបទ',
                'name_en' => 'Rural Engineering',
                'name_fr' => 'Rural Engineering',
                'code' => 'GRU',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_ggg'),
                'name_kh' => 'ធនធានរ៉ែ និងភូគព្ភសាស្ត្រ',
                'name_en' => 'Geo-Resources & Geo-technical Engineering',
                'name_fr' => 'Geo-Resources & Geo-technical Engineering',
                'code' => 'GGG',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            ),
            array(
                'id'=>config('access.departments.department_tc'),
                'name_kh' => 'ឆ្នាំសិក្សាមូលដ្ឋាន',
                'name_en' => 'Foundation Year',
                'name_fr' => 'Foundation Year',
                'code' => 'TC',
                'create_uid'=> 1,
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>Carbon\Carbon::now()
            )
        );

        foreach($departments as $department){
            DB::table('departments')->insert($department);
        }
    }
}
