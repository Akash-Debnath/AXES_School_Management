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

                <li class="{{ ($route == 'dashboard')?'active':'' }}">
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="pie-chart"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                @if('Admin' == 'Admin')
                <li class="{{ ($prefix == '/users')?'active':'' }} ">
                    <a href="#">
                        <i data-feather="message-circle"></i>
                        <span>Profile</span>
                    </a>
                </li>
                @endif

                <li class="{{ ($prefix == '/profile')?'active':'' }}">
                    <a href="#">
                        <i data-feather="grid"></i> <span>Profile Update</span>
                    </a>
                </li>



                <li class="{{ ($prefix == '/setups')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Password Change</span>
                    </a>
                </li>

               
                <li class="{{ ($prefix == '/students')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Student Information</span>
                    </a>
                </li>

                <li class="{{ ($prefix == '/frontoffice')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Payment Ledger</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/facultyinfo')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Payment Scheme</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/addmission')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Registration/Exam Clearance</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/expenses')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Registered Course</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/inventory')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Drop Semester</span>
                    </a>
                </li>
              
                <li class="{{ ($prefix == '/attendance')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Live Result </span>
                    </a>
                </li>
              
                <li class="{{ ($prefix == '/communicate')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Teaching Evaluation </span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/inventory')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Alumni Professional</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/homeworks')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Convocation Apply</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/library')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Certificate & Transcript Apply </span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/transport')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span> Online Exam </span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/certificate')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span> Class Routine </span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/alumni')?'active':'' }}">
                    <a href="{{ route('account.group.index') }}">
                        <i data-feather="edit-2"></i> <span>Mentor Meetings</span>
                    </a>
                </li>
              
               
                <li class="{{ ($prefix == '/accounts')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Result</span>
                    </a>
                </li>

               
                <li class="{{ ($prefix == '/feescollection')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Notices</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/examination')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Student Application</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/humanresource')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Alumni Card Aply</span>
                    </a>
                </li>
                <li class="{{ ($prefix == '/lessonplan')?'active':'' }}">
                    <a href="#">
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
