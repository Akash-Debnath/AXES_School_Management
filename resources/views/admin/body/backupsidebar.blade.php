@if(Auth::user()->role == 'Admin')
    <li class="treeview {{ ($prefix == '/users')?'active':'' }} ">
        <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('users.add') }}"><i class="ti-more"></i>Add User</a></li>
        </ul>
    </li>
@endif

<li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
    <a href="#">
        <i data-feather="grid"></i><span>Manage Profile</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
        <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>

    </ul>
</li>



<li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
    <a href="#">
        <i data-feather="credit-card"></i> <span>Setup Management</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('student.semester.view') }}"><i class="ti-more"></i>Student Semester</a></li>
        <li><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Student Class</a></li>
        <li><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Student Year</a></li>
        <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Student Group</a></li>
        <li><a href="{{ route('setup.shift.view') }}"><i class="ti-more"></i>Student Shift</a></li>
        <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a></li>
        <li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category Amount</a></li>
        <li><a href="{{ route('university.subject.view') }}"><i class="ti-more"></i>Add Subject</a></li>
        <li><a href="{{ route('faculty.view') }}"><i class="ti-more"></i>Faculty </a></li>
        {{-- <li><a href="{{ route('department.view') }}"><i class="ti-more"></i>Department </a></li> --}}
        <li><a href="{{ route('course.view') }}"><i class="ti-more"></i>Course </a></li>
        <li><a href="{{ route('program.view') }}"><i class="ti-more"></i>Program </a></li>


    </ul>
</li>


<!--<li class="treeview {{ ($prefix == '/marks')?'active':'' }}">-->
<!--        <a href="#">-->
<!--           <i data-feather="credit-card"></i> <span> Marks Management</span>-->
<!--          <span class="pull-right-container">-->
<!--            <i class="fa fa-angle-right pull-right"></i>-->
<!--          </span>-->
<!--        </a>-->
<!--        <ul class="treeview-menu">-->
<!--      <li class="{{ ($route == 'marks.entry.add')?'active':'' }}"><a href="{{ route('marks.entry.add') }}"><i class="ti-more"></i>Marks Entry</a></li> -->
<!--    <li class="{{ ($route == 'marks.entry.edit')?'active':'' }}"><a href="{{ route('marks.entry.edit') }}"><i class="ti-more"></i>Marks Edit</a></li>-->

<!--     <li class="{{ ($route == 'marks.entry.grade')?'active':'' }}"><a href="{{ route('marks.entry.grade') }}"><i class="ti-more"></i>Marks Grade</a></li> -->

    
            
<!--        </ul>-->
<!--      </li>-->
</li>

    <li class="treeview {{ ($prefix == '/students')?'active':'' }}">
    <a href="#">
        <i data-feather="credit-card"></i> <span>Forms</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('admitcard_forms') }}"><i class="ti-more"></i>Admit cards</a></li>
        <li><a href="{{ route('course_addform') }}"><i class="ti-more"></i>Course Add Or Drop</a></li>
        <li><a href="{{ route('improvement_examlist') }}"><i class="ti-more"></i>Improvement Examination</a></li>
        <li><a href="{{ route('department_changeList') }}"><i class="ti-more"></i>Department change</a></li>
        <li><a href="{{ route('permission_list') }}"><i class="ti-more"></i>Permission</a></li>
        <li><a href="{{ route('register_slip') }}"><i class="ti-more"></i>Register Slip</a></li>
    </ul>
</li>

<li class="treeview {{ ($prefix == '/facultyinfo')?'active':'' }}">
    <a href="#">
        <i data-feather="credit-card"></i> <span>Faculty Information</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('teacher.registration.view') }}"><i class="ti-more"></i>Teachers List</a></li>
        <li><a href="{{ route('teacher.registration.add') }}"><i class="ti-more"></i>Add Teacher</a></li>

    </ul>
</li>
<li class="treeview {{ ($prefix == '/addmission')?'active':'' }}">
    <a href="#">
        <i data-feather="credit-card"></i> <span>Online Addmission</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('onlineapplication.viewlist') }}"><i class="ti-more"></i>Admission Enquiry</a></li>
    </ul>
</li>
{{-- <li class="treeview {{ ($prefix == '/expenses')?'active':'' }}">
    <a href="#">
        <i data-feather="edit-2"></i> <span> Expenses </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class=""><a href=""><i class="ti-more"></i>Expenses Record</a></li>
        <li class=""><a href=""><i class="ti-more"></i>Create Expenses</a></li>
        <li class=""><a href=""><i class="ti-more"></i>Expenses Head</a></li>
        <li class=""><a href=""><i class="ti-more"></i>Add Expenses Head</a></li>


    </ul>
</li> --}}


{{-- <li class="treeview {{ ($prefix == '/attendance')?'active':'' }}">
    <a href="#">
        <i data-feather="edit-2"></i> <span> Attendance </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
    </ul>
</li> --}}



<!--<li class="treeview {{ ($prefix == '/certificate')?'active':'' }}">-->
<!--    <a href="#">-->
<!--        <i data-feather="edit-2"></i> <span> Certificate </span>-->
<!--        <span class="pull-right-container">-->
<!--            <i class="fa fa-angle-right pull-right"></i>-->
<!--        </span>-->
<!--    </a>-->
<!--    <ul class="treeview-menu">-->
<!--        <li class=""><a href="#"><i class="ti-more"></i>Purchase Invoice</a></li>-->
        
<!--    </ul>-->
<!--</li>-->
<!--<li class="treeview {{ ($prefix == '/alumni')?'active':'' }}">-->
<!--    <a href="#">-->
<!--        <i data-feather="edit-2"></i> <span> Alumni </span>-->
<!--        <span class="pull-right-container">-->
<!--            <i class="fa fa-angle-right pull-right"></i>-->
<!--        </span>-->
<!--    </a>-->
<!--    <ul class="treeview-menu">-->
<!--        <li class=""><a href="#"><i class="ti-more"></i>Purchase Invoice</a></li>-->
        
<!--    </ul>-->
<!--</li>-->


<!-- <li class="treeview {{ ($prefix == '/client')?'active':'' }}">
    <a href="#">
        <i data-feather="edit-2"></i> <span> Client & Vendor Setup </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ ($route == 'student.fee.view')?'active':'' }}"><a href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Client List</a></li>
        <li class="{{ ($route == 'student.fee.view')?'active':'' }}"><a href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Add Client</a></li>
        <li class="{{ ($route == 'student.fee.view')?'active':'' }}"><a href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Supplier list</a></li>
        <li class="{{ ($route == 'student.fee.view')?'active':'' }}"><a href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Add Supplier</a></li>

    </ul>
</li> -->

    <li class="treeview {{ ($prefix == '/alumni')?'active':'' }}">
    <a href="#">
        <i data-feather="edit-2"></i> <span> Alumni </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class=""><a href="{{route('manage_alumni')}}"><i class="ti-more"></i>Manage Alumni</a></li>
    </ul>
</li>


<!--<li class="treeview {{ ($prefix == '/lessonplan')?'active':'' }}">-->
<!--    <a href="#">-->
<!--        <i data-feather="edit-2"></i> <span>Lesson Plan</span>-->
<!--        <span class="pull-right-container">-->
<!--            <i class="fa fa-angle-right pull-right"></i>-->
<!--        </span>-->
<!--    </a>-->
<!--    <ul class="treeview-menu">-->
<!--        <li class=""><a href="#"><i class="ti-more"></i>Manage Lesson Plan</a></li>-->
<!--        <li class=""><a href="#"><i class="ti-more"></i>Manage Syllabus Status</a></li>-->
<!--        <li class=""><a href="#"><i class="ti-more"></i>Lesson</a></li>-->
<!--        <li class=""><a href="#"><i class="ti-more"></i>Topic</a></li>-->


<!--    </ul>-->
<!--</li>-->

<li class="treeview {{ ($prefix == '/notice')?'active':'' }}">
    <a href="#">
        <i data-feather="edit-2"></i> <span>Notice Board</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ ($route == 'marksheet.generate.view')?'active':'' }}"><a href="{{ route('marksheet.generate.view') }}"><i class="ti-more"></i>MarkSheet Generate</a></li>
    </ul>
</li>


<li class="treeview {{ ($prefix == '/userrole')?'active':'' }}">
    <a href="#">
        <i data-feather="edit-2"></i> <span>System Settings</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class=""><a href="{{route('general_setting')}}"><i class="ti-more"></i>General Setting</a></li>
        {{--                        <li class=""><a href="{{route('general_list')}}"><i class="ti-more"></i>General list</a></li>--}}
        <li class=""><a href="{{route('session_setting')}}"><i class="ti-more"></i>Session Setting</a></li>
        <li class=""><a href="{{route('notification_setting')}}"><i class="ti-more"></i>Notification Setting</a></li>
        <li class=""><a href="{{route('sms_setting')}}"><i class="ti-more"></i>SMS Setting</a></li>
        <li class=""><a href="{{route('email_setting')}}"><i class="ti-more"></i>Email Setting</a></li>
        <li class=""><a href="{{route('payment_method')}}"><i class="ti-more"></i>Payment Methods</a></li>
        <li class=""><a href="{{route('print_header')}}"><i class="ti-more"></i>Print Header Footer</a></li>
        <li class=""><a href="{{route('frontcms_setting')}}"><i class="ti-more"></i>Front CMS Setting</a></li>
        <li class=""><a href="{{route('roles_permission')}}"><i class="ti-more"></i>Roles Permissions</a></li>
        <li class=""><a href="{{route('backup_setting')}}"><i class="ti-more"></i>Backup/Resture</a></li>
        <li class=""><a href="{{route('language_setting')}}"><i class="ti-more"></i>Languages</a></li>
        <li class=""><a href="{{route('user_setting')}}"><i class="ti-more"></i>Users</a></li>
        <li class=""><a href="{{route('modules_setting')}}"><i class="ti-more"></i>Modules</a></li>
        <li class=""><a href="{{route('custom_fields')}}"><i class="ti-more"></i>Custom Fields</a></li>
        <li class=""><a href="{{route('captcha_setting')}}"><i class="ti-more"></i>Captcha Setting</a></li>
        <li class=""><a href="{{route('system_fields')}}"><i class="ti-more"></i>System Fields</a></li>
        <li class=""><a href="{{route('student_profile_setting')}}"><i class="ti-more"></i>Student Profile Update</a></li>
        <li class=""><a href="{{route('file_types')}}"><i class="ti-more"></i>File Types</a></li>
        <li class=""><a href="{{route('system_update')}}"><i class="ti-more"></i>System Update</a></li>
        {{--<li class=""><a href="#"><i class="ti-more"></i>All User</a></li>--}}
        {{-- <li class=""><a href="#"><i class="ti-more"></i>Add User</a></li>--}}


    </ul>
</li>
