<div class="sidebar sidebar-main sidebar-fixed">
    <div class="sidebar-content">
        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li class="active"><a href="{{action('MainController@index')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li class="navigation-divider"></li>
                {{--Employee Section--}}
                    <li class="{{ (Request::is('employee') ? 'active' : '') }}"><a href="{{action('Employee\EmployeeController@index')}}" class="text-capitalize"><i class="icon-user"></i> <span>Employee</span></a></li>
                    <li class="navigation-divider"></li>
                {{--Employee Section--}}

                {{--Attendance Section--}}
                    <li class="{{ (Request::is('attendance/list') ? 'active' : '') }}"><a href="{{action('Attendance\AttendanceController@index')}}" class="text-capitalize"><i class="icon-clipboard5"></i> <span>Attendance</span></a></li>
                    <li class="navigation-divider"></li>
                {{--Attendance Section--}}

                {{--Salary Section--}}
                    <li><a href="#" class="text-capitalize"><i class="icon-notebook"></i> <span>salary</span></a>
                        <ul>
                            <li class="{{ (Request::is('allemployee/salary') ? 'active' : '') }}"><a href="{{action('Employee\SalaryController@index')}}" class="text-capitalize"><i class="icon-radio-unchecked"></i> <span>new salary</span></a></li>
                            <li class="{{ (Request::is('salary/payment') ? 'active' : '') }}"><a href="{{action('Employee\PaymentController@index')}}" class="text-capitalize"><i class="icon-radio-unchecked"></i> <span>salary Sheet</span></a></li>
                        </ul>
                    </li>
                    <li class="navigation-divider"></li>
                {{--Salary Section--}}

                {{--Notice Section--}}
                    <li class="{{ (Request::is('event/list') ? 'active' : '') }}"><a href="{{action('Events\EventsController@index')}}" class="text-capitalize"><i class="icon-clipboard5"></i> <span>notice generate</span></a></li>
                    <li class="navigation-divider"></li>
                {{--Notice Section--}}

                {{--Leave Request--}}
                    <li class="{{ (Request::is('leave/list') ? 'active' : '') }}"><a href="{{action('Leave\LeaveRequestController@index')}}" class="text-capitalize"><i class="icon-user-block"></i> <span>leave requests</span></a></li>
                    <li class="navigation-divider"></li>
                {{--Leave Request--}}

                {{--Circular Section--}}
                    <li class="{{ (Request::is('circular/list') ? 'active' : '') }}"><a href="{{action('Circular\JobCircularController@index')}}" class="text-capitalize"><i class="icon-user-plus"></i> <span>Hire Employee</span></a></li>
                    <li class="navigation-divider"></li>
                {{--Circular Section--}}

                {{--Message Section--}}
                    <li><a href="#" class="text-capitalize"><i class="icon-envelop"></i> <span>Messages</span></a>
                        <ul>
                            <li class="{{ (Request::is('message/list') ? 'active' : '') }}"><a href="{{action('Message\MessageController@index')}}" class="text-capitalize"><i class="icon-radio-unchecked"></i> <span>Employee To Admin</span></a></li>
                            <li class="{{ (Request::is('reply/list') ? 'active' : '') }}"><a href="{{action('Message\AdminReplyController@index')}}" class="text-capitalize"><i class="icon-radio-unchecked"></i> <span>Admin To Employee</span></a></li>
                        </ul>
                    </li>
                    <li class="navigation-divider"></li>
                {{--Message Section--}}

                {{--Month Section--}}
                    <li class="{{ (Request::is('company') ? 'active' : '') }}"><a href="{{action('Company\CompanyController@index')}}" class="text-capitalize"><i class="icon-calendar"></i> <span>Company</span></a></li>
                    <li class="navigation-divider"></li>
                {{--Month Section--}}

                {{--Reports--}}
                    <li><a href="#"><i class="icon-stats-growth"></i> <span>Reports</span></a>
                        <ul>
                            <li class="{{ (Request::is('attendance/report') ? 'active' : '') }}"><a href="{{action('Reports\AttendanceReportController@index')}}" class="text-capitalize"><i class="icon-radio-unchecked"></i> <span>attendance</span></a></li>
                        </ul>
                    </li>
                {{--Reports--}}
                    <li><a href="#"><i class="icon-users"></i> <span>All Users</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>