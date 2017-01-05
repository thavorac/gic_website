<?php

Route::group(['middleware' => 'web'], function() {
    /**
     * Switch between the included languages
     */
    Route::group(['namespace' => 'Language'], function () {
        require (__DIR__ . '/Routes/Language/Language.php');
    });

    /**
     * Frontend Routes
     * Namespaces indicate folder structure
     */
    Route::group(['namespace' => 'Frontend'], function () {
        require (__DIR__ . '/Routes/Frontend/Frontend.php');
        require (__DIR__ . '/Routes/Frontend/Access.php');
    });
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    /**
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    require (__DIR__ . '/Routes/Backend/Dashboard.php');
    require (__DIR__ . '/Routes/Backend/Access.php');
    require (__DIR__ . '/Routes/Backend/LogViewer.php');
    require (__DIR__ . '/Routes/Backend/Slideshow.php');
    require (__DIR__ . '/Routes/Backend/AcademicYear.php');
    require (__DIR__ . '/Routes/Backend/Blog.php');
    require (__DIR__ . '/Routes/Backend/Course.php');
    require (__DIR__ . '/Routes/Backend/Department.php');
    require (__DIR__ . '/Routes/Backend/Employee.php');
    require (__DIR__ . '/Routes/Backend/Event.php');
    require (__DIR__ . '/Routes/Backend/File.php');
    require (__DIR__ . '/Routes/Backend/Gallery.php');
    require (__DIR__ . '/Routes/Backend/Mission.php');
    require (__DIR__ . '/Routes/Backend/News.php');
    require (__DIR__ . '/Routes/Backend/Partner.php');
    require (__DIR__ . '/Routes/Backend/PartnerType.php');
    require (__DIR__ . '/Routes/Backend/Program.php');
    require (__DIR__ . '/Routes/Backend/ProgramType.php');
    require (__DIR__ . '/Routes/Backend/Project.php');
    require (__DIR__ . '/Routes/Backend/RoomLab.php');
    require (__DIR__ . '/Routes/Backend/Scholarship.php');
    require (__DIR__ . '/Routes/Backend/ScholarshipWinner.php');
    require (__DIR__ . '/Routes/Backend/Student.php');
    require (__DIR__ . '/Routes/Backend/StudentMessage.php');
    require (__DIR__ . '/Routes/Backend/Timetable.php');
    require (__DIR__ . '/Routes/Backend/UsefulLink.php');
});
