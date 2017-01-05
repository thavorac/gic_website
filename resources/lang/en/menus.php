<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Access Management',

            'roles' => [
                'all' => 'All Roles',
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'main' => 'Roles',
            ],

            'users' => [
                'all' => 'All Users',
                'change-password' => 'Change Password',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'main' => 'Users',
            ],
        ],

        'log-viewer' => [
            'main' => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs',
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'slideshow' => 'Slide show',
            'general' => 'General',
            'department' => 'Department',
            'employee' => 'Employee',
            'program_type' => 'Program Type',
            'program' => 'Program',
            'scholarship' => 'Scholarship',
            'scholarship_winner' => 'Scholarship Winner',
            'student' => 'Student',
            'academic_year' => 'Academic Year',
            'timetable' => 'Timetable',
            'room_lab' => 'Room/Lab',
            'mission' => 'Mission',
            'partner' => 'Partner',
            'partner_type' => 'Partner Type',
            'useful_link' => 'Useful Link',
            'news' => 'News',
            'student_message' => "Student's Message",
            'project' => 'Project',
            'course' => 'Course',
            'event' => 'Event',
            'file' => 'Files',
            'gallery' => 'Gallery',
            'blog' => 'Blog'
        ],
    ],

    'language-picker' => [
        'language' => 'Language',
        /**
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'da' => 'Danish',
            'de' => 'German',
            'en' => 'English',
            'es' => 'Spanish',
            'fr' => 'French',
            'it' => 'Italian',
            'pt-BR' => 'Brazilian Portuguese',
            'sv' => 'Swedish',
            'th' => 'Thai',
        ],
    ],
];
