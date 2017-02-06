<?php

namespace App\Providers;

use App\Services\Access\Access;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class AccessServiceProvider
 * @package App\Providers
 */
class AccessServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Package boot method
     */
    public function boot()
    {
        $this->registerBladeExtensions();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAccess();
        $this->registerFacade();
        $this->registerBindings();
    }

    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerAccess()
    {
        $this->app->bind('access', function ($app) {
            return new Access($app);
        });
    }

    /**
     * Register the vault facade without the user having to add it to the app.php file.
     *
     * @return void
     */
    public function registerFacade()
    {
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Access', \App\Services\Access\Facades\Access::class);
        });
    }

    /**
     * Register service provider bindings
     */
    public function registerBindings()
    {
        $this->app->bind(
            \App\Repositories\Frontend\Access\User\UserRepositoryContract::class,
            \App\Repositories\Frontend\Access\User\EloquentUserRepository::class
        );

        $this->app->bind(
            \App\Repositories\Backend\Access\User\UserRepositoryContract::class,
            \App\Repositories\Backend\Access\User\EloquentUserRepository::class
        );

        $this->app->bind(
            \App\Repositories\Backend\Access\Role\RoleRepositoryContract::class,
            \App\Repositories\Backend\Access\Role\EloquentRoleRepository::class
        );

        $this->app->bind(
            \App\Repositories\Backend\Access\Permission\PermissionRepositoryContract::class,
            \App\Repositories\Backend\Access\Permission\EloquentPermissionRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\AcademicYear\AcademicYearRepositoryContract::class,
            \App\Repositories\Backend\AcademicYear\EloquentAcademicYearRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Blog\BlogRepositoryContract::class,
            \App\Repositories\Backend\Blog\EloquentBlogRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Course\CourseRepositoryContract::class,
            \App\Repositories\Backend\Course\EloquentCourseRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Department\DepartmentRepositoryContract::class,
            \App\Repositories\Backend\Department\EloquentDepartmentRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Employee\EmployeeRepositoryContract::class,
            \App\Repositories\Backend\Employee\EloquentEmployeeRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Event\EventRepositoryContract::class,
            \App\Repositories\Backend\Event\EloquentEventRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\File\FileRepositoryContract::class,
            \App\Repositories\Backend\File\EloquentFileRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Gallery\GalleryRepositoryContract::class,
            \App\Repositories\Backend\Gallery\EloquentGalleryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Mission\MissionRepositoryContract::class,
            \App\Repositories\Backend\Mission\EloquentMissionRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\News\NewsRepositoryContract::class,
            \App\Repositories\Backend\News\EloquentNewsRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Partner\PartnerRepositoryContract::class,
            \App\Repositories\Backend\Partner\EloquentPartnerRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\PartnerType\PartnerTypeRepositoryContract::class,
            \App\Repositories\Backend\PartnerType\EloquentPartnerTypeRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Program\ProgramRepositoryContract::class,
            \App\Repositories\Backend\Program\EloquentProgramRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\ProgramType\ProgramTypeRepositoryContract::class,
            \App\Repositories\Backend\ProgramType\EloquentProgramTypeRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Project\ProjectRepositoryContract::class,
            \App\Repositories\Backend\Project\EloquentProjectRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\RoomLab\RoomLabRepositoryContract::class,
            \App\Repositories\Backend\RoomLab\EloquentRoomLabRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Scholarship\ScholarshipRepositoryContract::class,
            \App\Repositories\Backend\Scholarship\EloquentScholarshipRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\ScholarshipWinner\ScholarshipWinnerRepositoryContract::class,
            \App\Repositories\Backend\ScholarshipWinner\EloquentScholarshipWinnerRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Student\StudentRepositoryContract::class,
            \App\Repositories\Backend\Student\EloquentStudentRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\StudentMessage\StudentMessageRepositoryContract::class,
            \App\Repositories\Backend\StudentMessage\EloquentStudentMessageRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Timetable\TimetableRepositoryContract::class,
            \App\Repositories\Backend\Timetable\EloquentTimetableRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\UsefulLink\UsefulLinkRepositoryContract::class,
            \App\Repositories\Backend\UsefulLink\EloquentUsefulLinkRepository::class
        );
        $this->app->bind(
            \App\Repositories\Backend\Slideshow\SlideshowRepositoryContract::class,
            \App\Repositories\Backend\Slideshow\EloquentSlideshowRepository::class
        );
    }

    /**
     * Register the blade extender to use new blade sections
     */
    protected function registerBladeExtensions()
    {
        /**
         * Role based blade extensions
         * Accepts either string of Role Name or Role ID
         */
        Blade::directive('role', function ($role) {
            return "<?php if (access()->hasRole{$role}): ?>";
        });

        /**
         * Accepts array of names or id's
         */
        Blade::directive('roles', function ($roles) {
            return "<?php if (access()->hasRoles{$roles}): ?>";
        });

        Blade::directive('needsroles', function ($roles) {
            return '<?php if (access()->hasRoles(' . $roles . ', true)): ?>';
        });

        /**
         * Permission based blade extensions
         * Accepts wither string of Permission Name or Permission ID
         */
        Blade::directive('permission', function ($permission) {
            return "<?php if (access()->allow{$permission}): ?>";
        });

        /**
         * Accepts array of names or id's
         */
        Blade::directive('permissions', function ($permissions) {
            return "<?php if (access()->allowMultiple{$permissions}): ?>";
        });

        Blade::directive('needspermissions', function ($permissions) {
            return '<?php if (access()->allowMultiple(' . $permissions . ', true)): ?>';
        });

        /**
         * Generic if closer to not interfere with built in blade
         */
        Blade::directive('endauth', function () {
            return '<?php endif; ?>';
        });
    }
}