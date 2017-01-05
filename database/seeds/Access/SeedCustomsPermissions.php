<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeedCustomsPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     * php artisan db:seed --class=SeedCustomsPermissions
     */
    public function run()
    {
        /* Department permissions */
        $roots[] = [
            'name'=>'Basic Information',
            'groups'=>[
                [
                    'name'=>'Department',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-department-management',
                            'display_name' => 'View Department Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-departments',
                            'display_name' => 'Create new department',
                            'dependency' => [
                                'view-backend','view-department-management'
                            ]
                        ],
                        [
                            'name' => 'edit-departments',
                            'display_name' => 'Edit department',
                            'dependency' => [
                                'view-backend','view-department-management'
                            ]
                        ],
                        [
                            'name' => 'delete-departments',
                            'display_name' => 'Delete existing department',
                            'dependency' => [
                                'view-backend','view-department-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Room/Lab',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-room_lab-management',
                            'display_name' => 'View Room/Lab Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-room_labs',
                            'display_name' => 'Create new room/lab',
                            'dependency' => [
                                'view-backend','view-room_lab-management'
                            ]
                        ],
                        [
                            'name' => 'edit-room_labs',
                            'display_name' => 'Edit room/lab',
                            'dependency' => [
                                'view-backend','view-room_lab-management'
                            ]
                        ],
                        [
                            'name' => 'delete-room_labs',
                            'display_name' => 'Delete existing room/lab',
                            'dependency' => [
                                'view-backend','view-room_lab-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Department',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-department-management',
                            'display_name' => 'View Department Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-departments',
                            'display_name' => 'Create new department',
                            'dependency' => [
                                'view-backend','view-department-management'
                            ]
                        ],
                        [
                            'name' => 'edit-departments',
                            'display_name' => 'Edit department',
                            'dependency' => [
                                'view-backend','view-department-management'
                            ]
                        ],
                        [
                            'name' => 'delete-departments',
                            'display_name' => 'Delete existing department',
                            'dependency' => [
                                'view-backend','view-department-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Partner Type',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-partner_type-management',
                            'display_name' => 'View Partner Type Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-partner_types',
                            'display_name' => 'Create new partner type',
                            'dependency' => [
                                'view-backend','view-partner_type-management'
                            ]
                        ],
                        [
                            'name' => 'edit-partner_types',
                            'display_name' => 'Edit partner type',
                            'dependency' => [
                                'view-backend','view-partner_type-management'
                            ]
                        ],
                        [
                            'name' => 'delete-partner_types',
                            'display_name' => 'Delete existing partner type',
                            'dependency' => [
                                'view-backend','view-partner_type-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Academic Year',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-academic_year-management',
                            'display_name' => 'View Academic Year Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-academic_years',
                            'display_name' => 'Create new academic year',
                            'dependency' => [
                                'view-backend','view-academic_year-management'
                            ]
                        ],
                        [
                            'name' => 'edit-academic_years',
                            'display_name' => 'Edit academic year',
                            'dependency' => [
                                'view-backend','view-academic_year-management'
                            ]
                        ],
                        [
                            'name' => 'delete-academic_years',
                            'display_name' => 'Delete existing academic year',
                            'dependency' => [
                                'view-backend','view-academic_year-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Program Type',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-program_type-management',
                            'display_name' => 'View Program Type Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-program_types',
                            'display_name' => 'Create new program type',
                            'dependency' => [
                                'view-backend','view-program_type-management'
                            ]
                        ],
                        [
                            'name' => 'edit-program_types',
                            'display_name' => 'Edit program type',
                            'dependency' => [
                                'view-backend','view-program_type-management'
                            ]
                        ],
                        [
                            'name' => 'delete-program_types',
                            'display_name' => 'Delete existing program type',
                            'dependency' => [
                                'view-backend','view-program_type-management'
                            ]
                        ]
                    ]
                ]

            ],
            'permissions' => [
                // Leave it empty if there is none

            ]
        ];

        $roots[] = [
            'name'=>'News/Message/Blogging',
            'groups'=>[
                [
                    'name'=>'Blog',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-blog-management',
                            'display_name' => 'View Blog Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-blogs',
                            'display_name' => 'Create new blog',
                            'dependency' => [
                                'view-backend','view-blog-management'
                            ]
                        ],
                        [
                            'name' => 'edit-blogs',
                            'display_name' => 'Edit blog',
                            'dependency' => [
                                'view-backend','view-blog-management'
                            ]
                        ],
                        [
                            'name' => 'delete-blogs',
                            'display_name' => 'Delete existing blog',
                            'dependency' => [
                                'view-backend','view-blog-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Student Message',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-student_message-management',
                            'display_name' => 'View Student Message Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-student_messages',
                            'display_name' => 'Create new student message',
                            'dependency' => [
                                'view-backend','view-student_message-management'
                            ]
                        ],
                        [
                            'name' => 'edit-student_messages',
                            'display_name' => 'Edit student message',
                            'dependency' => [
                                'view-backend','view-student_message-management'
                            ]
                        ],
                        [
                            'name' => 'delete-student_messages',
                            'display_name' => 'Delete existing student message',
                            'dependency' => [
                                'view-backend','view-student_message-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'News',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-news-management',
                            'display_name' => 'View News Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-news',
                            'display_name' => 'Create new news',
                            'dependency' => [
                                'view-backend','view-news-management'
                            ]
                        ],
                        [
                            'name' => 'edit-news',
                            'display_name' => 'Edit news',
                            'dependency' => [
                                'view-backend','view-news-management'
                            ]
                        ],
                        [
                            'name' => 'delete-news',
                            'display_name' => 'Delete existing news',
                            'dependency' => [
                                'view-backend','view-news-management'
                            ]
                        ]
                    ]
                ]

            ],
            'permissions' => [
                // Leave it empty if there is none

            ]
        ];
        $roots[] = [
            'name'=>'Academic',
            'groups'=>[
                [
                    'name'=>'Course',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-course-management',
                            'display_name' => 'View Course Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-courses',
                            'display_name' => 'Create new course',
                            'dependency' => [
                                'view-backend','view-course-management'
                            ]
                        ],
                        [
                            'name' => 'edit-courses',
                            'display_name' => 'Edit course',
                            'dependency' => [
                                'view-backend','view-course-management'
                            ]
                        ],
                        [
                            'name' => 'delete-courses',
                            'display_name' => 'Delete existing course',
                            'dependency' => [
                                'view-backend','view-course-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Timetable',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-timetable-management',
                            'display_name' => 'View Timetable Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-timetables',
                            'display_name' => 'Create new timetable',
                            'dependency' => [
                                'view-backend','view-timetable-management'
                            ]
                        ],
                        [
                            'name' => 'edit-timetables',
                            'display_name' => 'Edit timetable',
                            'dependency' => [
                                'view-backend','view-timetable-management'
                            ]
                        ],
                        [
                            'name' => 'delete-timetables',
                            'display_name' => 'Delete existing timetable',
                            'dependency' => [
                                'view-backend','view-timetable-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Student',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-student-management',
                            'display_name' => 'View Student Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-students',
                            'display_name' => 'Create new student',
                            'dependency' => [
                                'view-backend','view-student-management'
                            ]
                        ],
                        [
                            'name' => 'edit-students',
                            'display_name' => 'Edit student',
                            'dependency' => [
                                'view-backend','view-student-management'
                            ]
                        ],
                        [
                            'name' => 'delete-students',
                            'display_name' => 'Delete existing student',
                            'dependency' => [
                                'view-backend','view-student-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Scholarship',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-scholarship-management',
                            'display_name' => 'View Scholarship Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-scholarships',
                            'display_name' => 'Create new scholarship',
                            'dependency' => [
                                'view-backend','view-scholarship-management'
                            ]
                        ],
                        [
                            'name' => 'edit-scholarships',
                            'display_name' => 'Edit scholarship',
                            'dependency' => [
                                'view-backend','view-scholarship-management'
                            ]
                        ],
                        [
                            'name' => 'delete-scholarships',
                            'display_name' => 'Delete existing scholarship',
                            'dependency' => [
                                'view-backend','view-scholarship-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Scholarship Winner',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-scholarship_winner-management',
                            'display_name' => 'View Scholarship Winner Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-scholarship_winners',
                            'display_name' => 'Create new scholarship winner',
                            'dependency' => [
                                'view-backend','view-scholarship_winner-management'
                            ]
                        ],
                        [
                            'name' => 'edit-scholarship_winners',
                            'display_name' => 'Edit scholarship winner',
                            'dependency' => [
                                'view-backend','view-scholarship_winner-management'
                            ]
                        ],
                        [
                            'name' => 'delete-scholarship_winners',
                            'display_name' => 'Delete existing scholarship winner',
                            'dependency' => [
                                'view-backend','view-scholarship_winner-management'
                            ]
                        ]
                    ]
                ]

            ],
            'permissions' => [
                // Leave it empty if there is none

            ]
        ];
        $roots[] = [
            'name'=>'General Information',
            'groups'=>[
                [
                    'name'=>'Employee',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-employee-management',
                            'display_name' => 'View Employee Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-employees',
                            'display_name' => 'Create new employee',
                            'dependency' => [
                                'view-backend','view-employee-management'
                            ]
                        ],
                        [
                            'name' => 'edit-employees',
                            'display_name' => 'Edit employee',
                            'dependency' => [
                                'view-backend','view-employee-management'
                            ]
                        ],
                        [
                            'name' => 'delete-employees',
                            'display_name' => 'Delete existing employee',
                            'dependency' => [
                                'view-backend','view-employee-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Program',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-program-management',
                            'display_name' => 'View Program Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-programs',
                            'display_name' => 'Create new program',
                            'dependency' => [
                                'view-backend','view-program-management'
                            ]
                        ],
                        [
                            'name' => 'edit-programs',
                            'display_name' => 'Edit program',
                            'dependency' => [
                                'view-backend','view-program-management'
                            ]
                        ],
                        [
                            'name' => 'delete-programs',
                            'display_name' => 'Delete existing program',
                            'dependency' => [
                                'view-backend','view-program-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Event',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-event-management',
                            'display_name' => 'View Event Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-events',
                            'display_name' => 'Create new event',
                            'dependency' => [
                                'view-backend','view-event-management'
                            ]
                        ],
                        [
                            'name' => 'edit-events',
                            'display_name' => 'Edit event',
                            'dependency' => [
                                'view-backend','view-event-management'
                            ]
                        ],
                        [
                            'name' => 'delete-events',
                            'display_name' => 'Delete existing event',
                            'dependency' => [
                                'view-backend','view-event-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Mission',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-mission-management',
                            'display_name' => 'View Mission Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-missions',
                            'display_name' => 'Create new mission',
                            'dependency' => [
                                'view-backend','view-mission-management'
                            ]
                        ],
                        [
                            'name' => 'edit-missions',
                            'display_name' => 'Edit mission',
                            'dependency' => [
                                'view-backend','view-mission-management'
                            ]
                        ],
                        [
                            'name' => 'delete-missions',
                            'display_name' => 'Delete existing mission',
                            'dependency' => [
                                'view-backend','view-mission-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Partner',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-partner-management',
                            'display_name' => 'View Partner Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-partners',
                            'display_name' => 'Create new partner',
                            'dependency' => [
                                'view-backend','view-partner-management'
                            ]
                        ],
                        [
                            'name' => 'edit-partners',
                            'display_name' => 'Edit partner',
                            'dependency' => [
                                'view-backend','view-partner-management'
                            ]
                        ],
                        [
                            'name' => 'delete-partners',
                            'display_name' => 'Delete existing partner',
                            'dependency' => [
                                'view-backend','view-partner-management'
                            ]
                        ]
                    ]
                ]

            ],
            'permissions' => [
                // Leave it empty if there is none

            ]
        ];
        $roots[] = [
            'name'=>'Resources',
            'groups'=>[
                [
                    'name'=>'File',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-file-management',
                            'display_name' => 'View File Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-files',
                            'display_name' => 'Create new file',
                            'dependency' => [
                                'view-backend','view-file-management'
                            ]
                        ],
                        [
                            'name' => 'edit-files',
                            'display_name' => 'Edit file',
                            'dependency' => [
                                'view-backend','view-file-management'
                            ]
                        ],
                        [
                            'name' => 'delete-files',
                            'display_name' => 'Delete existing file',
                            'dependency' => [
                                'view-backend','view-file-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Useful Links',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-useful_link-management',
                            'display_name' => 'View Useful Link Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-useful_links',
                            'display_name' => 'Create new useful link',
                            'dependency' => [
                                'view-backend','view-useful_link-management'
                            ]
                        ],
                        [
                            'name' => 'edit-useful_links',
                            'display_name' => 'Edit useful link',
                            'dependency' => [
                                'view-backend','view-useful_link-management'
                            ]
                        ],
                        [
                            'name' => 'delete-useful_links',
                            'display_name' => 'Delete existing useful link',
                            'dependency' => [
                                'view-backend','view-useful_link-management'
                            ]
                        ]
                    ]
                ],
                [
                    'name'=>'Gallery',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-gallery-management',
                            'display_name' => 'View Gallery Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-galleries',
                            'display_name' => 'Create new gallery',
                            'dependency' => [
                                'view-backend','view-gallery-management'
                            ]
                        ],
                        [
                            'name' => 'edit-galleries',
                            'display_name' => 'Edit gallery',
                            'dependency' => [
                                'view-backend','view-gallery-management'
                            ]
                        ],
                        [
                            'name' => 'delete-galleries',
                            'display_name' => 'Delete existing gallery',
                            'dependency' => [
                                'view-backend','view-gallery-management'
                            ]
                        ]
                    ]
                ]

            ],
            'permissions' => [
                // Leave it empty if there is none

            ]
        ];

        $roots[] = [
            'name'=>'Research/Development',
            'groups'=>[
                [
                    'name'=>'Project',
                    'groups' => [

                    ],
                    'permissions' => [
                        [
                            'name'         => 'view-project-management',
                            'display_name' => 'View Project Management',
                            'dependency'   => [
                                'view-backend'
                            ]
                        ],
                        [
                            'name' => 'create-projects',
                            'display_name' => 'Create new project',
                            'dependency' => [
                                'view-backend','view-project-management'
                            ]
                        ],
                        [
                            'name' => 'edit-projects',
                            'display_name' => 'Edit project',
                            'dependency' => [
                                'view-backend','view-project-management'
                            ]
                        ],
                        [
                            'name' => 'delete-projects',
                            'display_name' => 'Delete existing project',
                            'dependency' => [
                                'view-backend','view-project-management'
                            ]
                        ]
                    ]
                ]

            ],
            'permissions' => [
                // Leave it empty if there is none

            ]
        ];

        $this->saveGroupPemission($roots, null);

    }

    private function saveGroupPemission($groupPermission,$parent_id){
        for($a=0;$a<count($groupPermission);$a++){
            $permission = $groupPermission[$a];

            // Save group first
            $group_model       = config('access.group');
            $group             = $group_model::where('name',$permission['name'])->first();
            if($group == null) $group = new $group_model;

            $group->name       = $permission['name'];
            $group->sort       = $a+1; // Sort start from 1
            $group->parent_id  = $parent_id;
            $group->created_at = Carbon::now();
            $group->updated_at = Carbon::now();
            $group->save();

            // Save permissions for current group second
            for($b=0;$b<count($permission['permissions']);$b++){

                $child  = $permission['permissions'][$b];

                $permission_model= config('access.permission');
                $p               = $permission_model::where('name',$child['name'])->first();
                if($p==null) $p = new $permission_model;

                $p->display_name = $child['display_name'];
                $p->name = $child['name'];
                $p->system       = true;
                $p->group_id     = $group->id;
                $p->sort         = $b+1;
                $p->created_at   = Carbon::now();
                $p->updated_at   = Carbon::now();
                $p->save();

                // Permission dependency
                if(count($child['dependency']) > 0){
                    foreach($child['dependency'] as $dependency){
                        $permission_id = $p->id;
                        $dependency_id = DB::table('permissions')->where('name', $dependency)->first()->id;

                        // check if already have dependency
                        $db_dependency =  DB::table(config('access.permission_dependencies_table'))->where(['permission_id'=>$permission_id,'dependency_id'=>$dependency_id])->first();
                        // Insert new if there isn't
                        if($db_dependency == null){
                            DB::table(config('access.permission_dependencies_table'))->insert([
                                'permission_id' => $permission_id,
                                'dependency_id' => $dependency_id,
                                'created_at'    => Carbon::now(),
                                'updated_at'    => Carbon::now(),
                            ]);
                        }
                    }
                }
            }

            // Save Child groups third, and repeat
            if(!empty($permission['groups'])){
                $this->saveGroupPemission($permission['groups'],$group->id);
            }
        }
    }
}
