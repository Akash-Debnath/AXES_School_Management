@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();

    @endphp


    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <div class="user-profile">
                <div class="ulogo">
                    <a href="{{ route('dashboard') }}">
                        <!-- logo for regular state and mobile devices -->
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{asset('public/backend/images/logo-dark.png')}}" alt="">
                            <h6>Admin</h6>
                        </div>
                    </a>
                </div>
            </div>

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">

                <li class="{{ ($route == 'student.dashboard')?'active':'' }}">
                    <a href="{{ url('student/dashboard') }}">
                        <i data-feather="pie-chart"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- @if('Admin' == 'Admin')
                <li class="{{ ($prefix == '/users')?'active':'' }} ">
                    <a href="#">
                        <i data-feather="message-circle"></i>
                        <span>All Students</span>
                    </a>
                </li>
                @endif --}}

                <li class="{{ ($prefix == '/profile')?'active':'' }}">
                    <a href="#">
                        <i data-feather="grid"></i> <span>Profile</span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/setups')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Fees</span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/certificate')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span> Class Routine </span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/homeworks')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Home Work</span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/downloads')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Downloads</span>
                    </a>
                </li>



                <li class="{{ ($prefix == '/attendance')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Attendance</span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/examination')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Examinations</span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/leaves')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Leave</span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/exam')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span> Online Exam </span>
                    </a>
                </li>

                <li class="{{ ($prefix == '/notices')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Notice Board</span>
                    </a>
                </li>

                <li class="{{ ($prefix == '/subject')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Subjects</span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/teacher')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Teachers </span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/library')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Library </span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/transport')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Transport </span>
                    </a>
                </li>



                <li class="{{ ($prefix == '/library')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Results </span>
                    </a>
                </li>


                <li class="{{ ($prefix == '/setups')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Password Change</span>
                    </a>
                </li>

    
                <li class="">
                    <a href="{{ url('student/logout') }}">
                        <i data-feather="edit-2"></i> <span>Logout</span>
                    </a>
                </li>
                
            </ul>
        </section>

        <div class="sidebar-footer">
            <!-- item-->
            <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
            <!-- item-->
            <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
        </div>
    </aside>
