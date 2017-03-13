<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'id' => 'ID',
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation'
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'roles' => 'Roles',
                    'total' => 'user total|users total',
                ],
            ],
        ],
        'academic_year' => [
            'title' => [
                'main' => 'Academic Year',
                'index' => 'All existing academic year',
                'edit' => 'Edit academic year information',
                'create' => 'Create new academic year',
                'detail' => 'Detail of an academic year',
                'import' => 'Import academic years'
            ],
            'fields'=>[
                'year' => 'Year',
                'description' => "Description",
            ]
        ],
        'blog' => [
            'title' => [
                'main' => 'Blog',
                'index' => 'All existing blog',
                'edit' => 'Edit blog information',
                'create' => 'Create new blog',
                'detail' => 'Detail of a blog',
                'import' => 'Import blogs'
            ],
            'fields'=>[
                'title' => 'Title',
                'content' => 'Content',
                'image' => 'Image',
                'belong_to' => 'Belong To',
                'status' => 'Status',
                'description' => "Description",
            ]
        ],
        'course' => [
            'title' => [
                'main' => 'Course',
                'index' => 'All existing course',
                'edit' => 'Edit course information',
                'create' => 'Create new course',
                'detail' => 'Detail of a course',
                'import' => 'Import courses'
            ],
            'fields'=>[
                'name' => 'Name',
                'credit' => 'Credit',
                'image' => 'Image',
                'about' => 'About',
                'outcome' => 'Outcome',
                'semester' => 'Semester',
                'syllabus' => 'Syllabus',
                'department_id' => 'Department',
                'description' => "Description",
            ]
        ],
        'department' => [
            'title' => [
                'main' => 'Department',
                'index' => 'All existing department',
                'edit' => 'Edit department information',
                'create' => 'Create new department',
                'detail' => 'Detail of a department',
                'import' => 'Import departments'
            ],
            'fields'=>[
                'name' => "Name",
                'name_kh' => 'Name KH',
                'name_en' => 'Name EN',
                'name_fr' => 'Name FR',
                'contact' => "Contact",
                'code' => 'Code',
                'description' => "Description",
                'phone' => 'Phone',
                'email' => 'Email',
                'phone_email' => "Phone/Email",
                'address' => 'Address',
                'social_media' => 'Social Media',
                'facebook' => 'Facebook',
                'gplus' => 'GPlus',
                'twitter' => 'Twitter',
                'youtube' => 'Youtube',
                'logo' => "Logo",
                'headline' => 'Headline',
                'about_dept' => 'About Department',
                'mission' => 'Mission',
                'vision' => 'Vision',
                'contact_us' => 'Contact Us'
            ]
        ],
        'employee' => [
            'title' => [
                'main' => 'Employee',
                'index' => 'All existing employee',
                'edit' => 'Edit employee information',
                'create' => 'Create new employee',
                'detail' => 'Detail of an employee',
                'import' => 'Import employees'
            ],
            'fields'=>[
                'name_kh' => 'Name KH',
                'name_latin' => 'Name Latin',
                'photo' => 'Photo',
                'dob' => 'dob',
                'start_working_date' => 'Start working on',
                'stop_working_date' => 'Stop working on',
                'cv' => 'CV',
                'about_me' => 'About me',
                'interest' => 'Interest'
            ]
        ],
        'event' => [
            'title' => [
                'main' => 'Event',
                'index' => 'All existing event',
                'edit' => 'Edit event information',
                'create' => 'Create new event',
                'detail' => 'Detail of a event',
                'import' => 'Import events'
            ],
            'fields'=>[
                'name' => 'Name',
                'date' => 'Date',
                'date_start' => 'Date Start',
                'date_end' => 'Date End',
                'time_start' => 'Time Start',
                'time_end' => 'Time End',
                'require_register' => 'Require Register',
                'pending' => 'Pending',
                'file' => 'File',
                'about' => 'About',
                'location' => "Location"
            ]
        ],
        'file' => [
            'title' => [
                'main' => 'File',
                'index' => 'All existing file',
                'edit' => 'Edit file information',
                'create' => 'Create new file',
                'detail' => 'Detail of a file',
                'import' => 'Import files'
            ],
            'fields'=>[
                'name' => 'Name',
                'url' => 'Url',
                'description' => 'Description'
            ]
        ],
        'gallery' => [
            'title' => [
                'main' => 'Gallery',
                'index' => 'All existing gallery',
                'edit' => 'Edit gallery information',
                'create' => 'Create new gallery',
                'detail' => 'Detail of a gallery',
                'import' => 'Import galleries'
            ],
            'fields'=>[
                'title' => 'Title',
                'description' => 'Description',
                'image' => 'Image',
                'belong_to' => 'Belong To',
                'level' => 'Level'
            ]
        ],
        'slideshow' => [
            'title' => [
                'main' => 'Slide Show Item',
                'index' => 'All existing slide show item',
                'edit' => 'Edit slide show item',
                'create' => 'Create new slide show item',
                'detail' => 'Detail of a slide show item',
                'import' => 'Import slide show items'
            ],
            'fields'=>[
                'image' => 'Image',
                'title' => 'Title',
                'description' => 'Description',
                'page_url' => 'Page URL',
                'active' => 'Active',
                'about' => 'About this slide show',
                'reference_link' => 'Reference Link',
                'reference_text' => 'Reference Text',
                'reference' => 'Reference'
            ]
        ],
        'mission' => [
            'title' => [
                'main' => 'Mission',
                'index' => 'All existing mission',
                'edit' => 'Edit mission information',
                'create' => 'Create new mission',
                'detail' => 'Detail of a mission',
                'import' => 'Import missions'
            ],
            'fields'=>[
                'name' => 'Name',
                'description' => 'Description',
                'file' => 'File',
                'person' => 'Person'
            ]
        ],
        'news' => [
            'title' => [
                'main' => 'News',
                'index' => 'All existing news',
                'edit' => 'Edit news information',
                'create' => 'Create new news',
                'detail' => 'Detail of a news',
                'import' => 'Import news'
            ],
            'fields'=>[
                'title' => 'Title',
                'image' => "Image",
                'context' => 'Context',
            ]
        ],
        'partner_type' => [
            'title' => [
                'main' => 'Partner Type',
                'index' => 'All existing partner type',
                'edit' => 'Edit partner type information',
                'create' => 'Create new partner type',
                'detail' => 'Detail of a partner type',
                'import' => 'Import partner types'
            ],
            'fields'=>[
                'name' => 'Name',
                'description' => 'Description'
            ]
        ],
        'partner' => [
            'title' => [
                'main' => 'Partner',
                'index' => 'All existing partner',
                'edit' => 'Edit partner information',
                'create' => 'Create new partner',
                'detail' => 'Detail of a partner',
                'import' => 'Import partners'
            ],
            'fields'=>[
                'name' => 'Name',
                'logo' => 'logo',
                'url' => 'Url',
                'mou' => "MOU",
                'description' => 'Description',
                'partner_type_id' => 'Partner Type'
            ]
        ],
        'program_type' => [
            'title' => [
                'main' => 'Program type',
                'index' => 'All existing program type',
                'edit' => 'Edit program type information',
                'create' => 'Create new program type',
                'detail' => 'Detail of a program type',
                'import' => 'Import program types'
            ],
            'fields'=>[
                'name' => 'Name',
                'description' => 'Description'
            ]
        ],
        'program' => [
            'title' => [
                'main' => 'Program',
                'index' => 'All existing program',
                'edit' => 'Edit program information',
                'create' => 'Create new program',
                'detail' => 'Detail of a program',
                'import' => 'Import programs'
            ],
            'fields'=>[
                'name' => 'Name',
                'about' => 'About',
                'syllabus' => 'Syllabus',
                'program_type_id' => "Program Type",
                'description' => 'Description'
            ]
        ],
        'project' => [
            'title' => [
                'main' => 'Project',
                'index' => 'All existing project',
                'edit' => 'Edit project information',
                'create' => 'Create new project',
                'detail' => 'Detail of a project',
                'import' => 'Import project'
            ],
            'fields'=>[
                'name' => 'Name',
                'about' => 'About',
                'job_responsibility' => 'Job Responsibility',
                'is_finished' => "Is Finished",
                'description' => 'Description',
                'sponsor_id' => "Sponsor",
                'partner_id' => "Partner"
            ]
        ],
        'room_lab' => [
            'title' => [
                'main' => 'Room/Lab',
                'index' => 'All existing room/lab',
                'edit' => 'Edit room/lab information',
                'create' => 'Create new room/lab',
                'detail' => 'Detail of a room/lab',
                'import' => 'Import rooms/labs'
            ],
            'fields'=>[
                'name' => 'Name',
                'about' => 'About',
                'person_in_charge' => 'Person in charge',
                'description' => 'Description',
                'department_id' => 'Department'
            ]
        ],
        'scholarship_winner' => [
            'title' => [
                'main' => 'Scholarship Winner',
                'index' => 'All existing scholarship winner',
                'edit' => 'Edit scholarship winner information',
                'create' => 'Create new scholarship winner',
                'detail' => 'Detail of a scholarship winner',
                'import' => 'Import scholarship winners'
            ],
            'fields'=>[
                'name_kh' => 'Name KH',
                'name_latin' => 'Name Latin',
                'photo' => 'Photo',
                'degree' => 'Degree',
                'duration' => 'Duration',
                'description' => 'Description',
                'is_staff' => 'Is Staff?',
                'obtain_year' => 'Obtain Year',
                'university' => 'University',
                'scholarship_id' => 'Scholarship'
            ]
        ],
        'scholarship' => [
            'title' => [
                'main' => 'Scholarship',
                'index' => 'All existing scholarship',
                'edit' => 'Edit scholarship information',
                'create' => 'Create new scholarship',
                'detail' => 'Detail of a scholarship',
                'import' => 'Import scholarships'
            ],
            'fields'=>[
                'name' => 'Name',
                'about' => 'About',
                'description' => 'Description'
            ]
        ],
        'student_message' => [
            'title' => [
                'main' => 'Student Message',
                'index' => 'All existing student message',
                'edit' => 'Edit student message information',
                'create' => 'Create new student message',
                'detail' => 'Detail of a student message',
                'import' => 'Import student messages'
            ],
            'fields'=>[
                'message' => 'Message',
                'post_date' => 'Post Date',
                'student_id' => 'Student'
            ]
        ],
        'student' => [
            'title' => [
                'main' => 'Student',
                'index' => 'All existing student',
                'edit' => 'Edit student information',
                'create' => 'Create new student',
                'detail' => 'Detail of a student',
                'import' => 'Import students'
            ],
            'fields'=>[
                'general_info' => 'General Info',
                'contact' => 'Contact',
                'name_kh' => 'Name KH',
                'name_latin' => 'Name Latin',
                'name' => 'Name',
                'photo' => 'Photo',
                'dob' => "Date of birth",
                'personal_phone' => 'Personal Phone',
                'parent_phone' => "Parent Phone",
                'email' => "Email",
                'id_card' => "ID Card",
                'address' => "Address",
                'description' => 'Description',
                'about' => 'About',
                'department_id' => "Department",
                'promotion' => "Promotion"
            ]
        ],
        'timetable' => [
            'title' => [
                'main' => 'Timetable',
                'index' => 'All existing timetable',
                'edit' => 'Edit timetable information',
                'create' => 'Create new timetable',
                'detail' => 'Detail of a timetable',
                'import' => 'Import timetables'
            ],
            'fields'=>[
                'name' => 'Name',
                'trimester' => 'Trimester',
                'file' => 'File',
                'academic_year_id' => "Academic Year",
                'description' => 'Description'

            ]
        ],
        'useful_link' => [
            'title' => [
                'main' => 'Useful Link',
                'index' => 'All existing useful link',
                'edit' => 'Edit useful link information',
                'create' => 'Create new useful link',
                'detail' => 'Detail of a useful link',
                'import' => 'Import useful links'
            ],
            'fields'=>[
                'name' => 'Name',
                'url' => 'Url',
                'description' => 'Description'
            ]
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],

        'passwords' => [
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'macros' => [
            'country' => [
                'alpha' => 'Country Alpha Codes',
                'alpha2' => 'Country Alpha 2 Codes',
                'alpha3' => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us' => [
                    'us' => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed' => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],
            'timezone' => 'Timezone',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'update_information' => 'Update Information',
            ],
        ],

    ],
];
