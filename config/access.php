<?php

return [

    /*
     * Users table used to store users
     */
    'users_table' => 'users',

    /*
     * Role model used by Access to create correct relations. Update the role if it is in a different namespace.
    */
    'role' => App\Models\Access\Role\Role::class,

    /*
     * Roles table used by Access to save roles to the database.
     */
    'roles_table' => 'roles',

    /*
     * Permission model used by Access to create correct relations.
     * Update the permission if it is in a different namespace.
     */
    'permission' => App\Models\Access\Permission\Permission::class,

    /*
     * Permissions table used by Access to save permissions to the database.
     */
    'permissions_table' => 'permissions',

    /*
     * permission_role table used by Access to save relationship between permissions and roles to the database.
     */
    'permission_role_table' => 'permission_role',

    /*
     * assigned_roles table used by Access to save assigned roles to the database.
     */
    'assigned_roles_table' => 'assigned_roles',

    /*
     * Configurations for the user
     */
    'users' => [
        /*
         * The role the user is assigned to when they sign up from the frontend, not namespaced
         */
        'default_role' => 'User',
        //'default_role' => 2,

        /*
         * Whether or not the user has to confirm their email when signing up
         */
        'confirm_email' => true,

        /*
         * Whether or not the users email can be changed on the edit profile screen
         */
        'change_email' => false,
    ],

    /*
     * Configuration for roles
     */
    'roles' => [
        /*
         * Whether a role must contain a permission or can be used standalone as a label
         */
        'role_must_contain_permission' => true
    ],

    /*
     * Socialite session variable name
     * Contains the name of the currently logged in provider in the users session
     * Makes it so social logins can not change passwords, etc.
     */
    'socialite_session_name' => 'socialite_provider',

    /*
     * Application captcha specific settings
     */
    'captcha' => [
		/*
		 * The name of the session variable that stores the current login attempts for each user
		 */
		'session_key' => 'needs_captcha',

        /*
         * Whether the registration captcha is on or off
         */
        'registration' => env('REGISTRATION_CAPTCHA_STATUS', false),

        /*
         * Whether the login captcha is on or off
         */
        'login' => env('LOGIN_CAPTCHA_STATUS', false),

        /*
         * Number of login tries made before showing login captcha
         */
        'login_tries' => env('LOGIN_CAPTCHA_TRIES', 3),
     ],
    'schools' => [
        'itc' => 2,
    ],
    'departments' =>[
        'department_gca'=> 1,
        'department_gci'=> 2,
        'department_gee'=> 3,
        'department_gic'=> 4,
        'department_gim'=> 5,
        'department_gru'=> 6,
        'department_ggg'=> 7,
        'department_tc'=> 8,
        'department_finance' => 9,
        'department_study_affair'=>10,
        'department_academic'=>11,
        'sa'=> 12,
        'sf'=> 13
    ],
    'genders' => [
        'gender_male'=> 1,
        'gender_female'=> 2,
    ],
    'degrees' => [
        'degree_engineer'=> 1,
        'degree_associate'=> 2,
        'degree_bachelor'=> 3,
        'degree_master'=>4,
        'degree_doctor'=> 5,
    ],
    'grades' => [
        'grade_1'=> 1,
        'grade_2'=> 2,
        'grade_3'=> 3,
        'grade_4'=> 4,
        'grade_5'=> 5,
    ],
];