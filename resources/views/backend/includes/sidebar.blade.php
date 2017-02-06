<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ access()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('strings.backend.general.status.online') }}</a>
            </div>
        </div>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="{{ trans('strings.backend.general.search_placeholder') }}" />
                  <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
            </div>
        </form>

        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

            <li class="{{ Active::pattern('admin/dashboard') }}">
                {{ link_to_route('admin.dashboard', trans('menus.backend.sidebar.dashboard')) }}
            </li>
            <li class="
                        {{ Active::pattern('admin/news*') }}
                        {{ Active::pattern('admin/student_message*') }}
                        {{ Active::pattern('admin/blog*') }}
                    treeview">
                <a href="#">
                    <span>News/Messages/Blogging</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu
                    {{ Active::pattern('admin/news*', 'menu-open') }}
                    {{ Active::pattern('admin/student_message*', 'menu-open') }}
                    {{ Active::pattern('admin/blog*', 'menu-open') }} ">
                    <li class="{{ Active::pattern('admin/news*') }}">
                        {{ link_to_route('admin.news.index', trans('menus.backend.sidebar.news')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/student_message*') }}">
                        {{ link_to_route('admin.student_message.index', trans('menus.backend.sidebar.student_message')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/blog*') }}">
                        {{ link_to_route('admin.blog.index', trans('menus.backend.sidebar.blog')) }}
                    </li>
                </ul>
            </li>
            <li class="
                        {{ Active::pattern('admin/program*') }}
                        {{ Active::pattern('admin/mission*') }}
                        {{ Active::pattern('admin/partner*') }}
                        {{ Active::pattern('admin/employee*') }}
                        {{ Active::pattern('admin/event*') }}
                    treeview">
                <a href="#">
                    <span>General Information</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu
                    {{ Active::pattern('admin/program*', 'menu-open') }}
                    {{ Active::pattern('admin/mission*', 'menu-open') }}
                    {{ Active::pattern('admin/partner*', 'menu-open') }}
                    {{ Active::pattern('admin/employee*', 'menu-open') }}
                    {{ Active::pattern('admin/event*', 'menu-open') }} ">
                    <li class="{{ Active::pattern('admin/program*') }}">
                        {{ link_to_route('admin.program.index', trans('menus.backend.sidebar.program')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/mission*') }}">
                        {{ link_to_route('admin.mission.index', trans('menus.backend.sidebar.mission')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/partner*') }}">
                        {{ link_to_route('admin.partner.index', trans('menus.backend.sidebar.partner')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/employee*') }}">
                        {{ link_to_route('admin.employee.index', trans('menus.backend.sidebar.employee')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/event*') }}">
                        {{ link_to_route('admin.event.index', trans('menus.backend.sidebar.event')) }}
                    </li>
                </ul>
            </li>
            <li class="
                        {{ Active::pattern('admin/project*') }}
                    treeview">
                <a href="#">
                    <span>Research / Development</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu
                    {{ Active::pattern('admin/project*', 'menu-open') }} ">
                    <li class="{{ Active::pattern('admin/project*') }}">
                        {{ link_to_route('admin.project.index', trans('menus.backend.sidebar.project')) }}
                    </li>
                </ul>
            </li>
            <li class="
                        {{ Active::pattern('admin/course*') }}
                        {{ Active::pattern('admin/timetable*') }}
                        {{ Active::pattern('admin/student*') }}
                        {{ Active::pattern('admin/scholarship*') }}
                        {{ Active::pattern('admin/scholarship_winner*') }}
                    treeview">
                <a href="#">
                    <span>Academic</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu
                    {{ Active::pattern('admin/course*', 'menu-open') }}
                    {{ Active::pattern('admin/timetable*', 'menu-open') }}
                    {{ Active::pattern('admin/student*', 'menu-open') }}
                    {{ Active::pattern('admin/scholarship*', 'menu-open') }}
                    {{ Active::pattern('admin/scholarship_winner*', 'menu-open') }} ">
                    <li class="{{ Active::pattern('admin/course*') }}">
                        {{ link_to_route('admin.course.index', trans('menus.backend.sidebar.course')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/timetable*') }}">
                        {{ link_to_route('admin.timetable.index', trans('menus.backend.sidebar.timetable')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/student*') }}">
                        {{ link_to_route('admin.student.index', trans('menus.backend.sidebar.student')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/scholarship*') }}">
                        {{ link_to_route('admin.scholarship.index', trans('menus.backend.sidebar.scholarship')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/scholarship_winner*') }}">
                        {{ link_to_route('admin.scholarship_winner.index', trans('menus.backend.sidebar.scholarship_winner')) }}
                    </li>
                </ul>
            </li>
            <li class="
                        {{ Active::pattern('admin/file*') }}
                        {{ Active::pattern('admin/gallery*') }}
                        {{ Active::pattern('admin/useful_link*') }}
                        {{ Active::pattern('admin/slideshow*') }}
                    treeview">
                <a href="#">
                    <span>Resources</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu
                    {{ Active::pattern('admin/file*', 'menu-open') }}
                    {{ Active::pattern('admin/gallery*', 'menu-open') }}
                    {{ Active::pattern('admin/useful_link*', 'menu-open') }} ">
                    {{ Active::pattern('admin/slideshow*', 'menu-open') }} ">
                    <li class="{{ Active::pattern('admin/file*') }}">
                        {{ link_to_route('admin.file.index', trans('menus.backend.sidebar.file')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/gallery*') }}">
                        {{ link_to_route('admin.gallery.index', trans('menus.backend.sidebar.gallery')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/useful_link*') }}">
                        {{ link_to_route('admin.useful_link.index', trans('menus.backend.sidebar.useful_link')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/slideshow*') }}">
                        {{ link_to_route('admin.slideshow.index', trans('menus.backend.sidebar.slideshow')) }}
                    </li>
                </ul>
            </li>
            <li class="
                        {{ Active::pattern('admin/department*') }}
                        {{ Active::pattern('admin/partner_type*') }}
                        {{ Active::pattern('admin/academic_year*') }}
                        {{ Active::pattern('admin/partner_type*') }}
                        {{ Active::pattern('admin/program_type*') }}
                        {{ Active::pattern('admin/room_lab*') }}
                    treeview">
                <a href="#">
                    <span>Basic Information</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu
                    {{ Active::pattern('admin/department*', 'menu-open') }}
                    {{ Active::pattern('admin/partner_type*', 'menu-open') }}
                    {{ Active::pattern('admin/academic_year*', 'menu-open') }}
                    {{ Active::pattern('admin/partner_type*', 'menu-open') }}
                    {{ Active::pattern('admin/program_type*', 'menu-open') }}
                    {{ Active::pattern('admin/room_lab*', 'menu-open') }} ">
                    <li class="{{ Active::pattern('admin/department*') }}">
                        {{ link_to_route('admin.department.index', trans('menus.backend.sidebar.department')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/partner_type*') }}">
                        {{ link_to_route('admin.partner_type.index', trans('menus.backend.sidebar.partner_type')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/academic_year*') }}">
                        {{ link_to_route('admin.academic_year.index', trans('menus.backend.sidebar.academic_year')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/partner_type*') }}">
                        {{ link_to_route('admin.partner_type.index', trans('menus.backend.sidebar.partner_type')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/program_type') }}">
                        {{ link_to_route('admin.program_type.index', trans('menus.backend.sidebar.program_type')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/room_lab*') }}">
                        {{ link_to_route('admin.room_lab.index', trans('menus.backend.sidebar.room_lab')) }}
                    </li>
                </ul>
            </li>
            @permission('manage-users')
                <li class="{{ Active::pattern('admin/access/*') }}">
                    {{ link_to_route('admin.access.user.index', trans('menus.backend.access.title')) }}
                </li>
            @endauth

            <li class="{{ Active::pattern('admin/log-viewer*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/log-viewer') }}">
                        {{ link_to('admin/log-viewer', trans('menus.backend.log-viewer.dashboard')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/log-viewer/logs') }}">
                        {{ link_to('admin/log-viewer/logs', trans('menus.backend.log-viewer.logs')) }}
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>