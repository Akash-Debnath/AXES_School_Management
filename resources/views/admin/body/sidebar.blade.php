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

                <li class="treeview {{ ($prefix == '/frontoffice')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Admin Section</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                    
                        <li class="{{ ($route == 'admissionenquiry.view')?'active':'' }}"><a href="{{ route('admissionenquiry.view') }}"><i class="ti-more"></i>Admission Enquiry</a></li>
                        <li class="{{ ($route == 'visitorbook.view')?'active':'' }}"><a href="{{ route('visitorbook.view') }}"><i class="ti-more"></i>Visitor Book</a></li>
                        <li class="{{ ($route == 'complain.view')?'active':'' }}"><a href="{{ route('complain.view') }}"><i class="ti-more"></i>Complaints</a></li>
                        <li class="{{ ($route == 'phonecalllog.view')?'active':'' }}"><a href="{{ route('phonecalllog.view') }}"><i class="ti-more"></i>Phone Call Log</a></li>
                        <li class="{{ ($route == 'setupfrontoffice.view')?'active':'' }}"><a href="{{ route('setupfrontoffice.view') }}"><i class="ti-more"></i>Admin Setup</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Student Certificate</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Generate Certificate</a></li>
                        <li class="{{ ($route == 'student.idcard.view')?'active':'' }}"><a href="{{ route('student.idcard.view') }}"><i class="ti-more"></i>Student ID Card </a></li>  
                        <li class=""><a href=""><i class="ti-more"></i>Generate ID Card</a></li>
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/students')?'active':'' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i> <span>Student Information</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href=""><i class="ti-more"></i>Student Category</a></li>
                        <li><a href="{{ route('student.registration.view') }}"><i class="ti-more"></i>Student List</a></li>
                        <li><a href="{{ route('student.registration.add') }}"><i class="ti-more"></i>Add Student</a></li>
                        <li class="{{ ($route == 'student.attendance.index')?'active':'' }}"><a href="{{route('student.attendance.index')}}"><i class="ti-more"></i>Attendance List</a></li>
                        <li class="{{ ($route == 'student.attendance.create')?'active':'' }}"><a href="{{route('student.attendance.create')}}"><i class="ti-more"></i>Attendance Create</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Student Attendance Report</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Subject-wise Attendance</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Subject-wise Attendance Report</a></li>
                        <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Student Group</a></li>
                        <li class="{{ ($route == 'promotestudents.view')?'active':'' }}"><a href="{{ route('promotestudents.view') }}"><i class="ti-more"></i>Promote Students</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Disable Student</a></li>


                        <li class="{{ ($route == 'student.result.view')?'active':'' }}"><a href="{{ route('student.result.view') }}"><i class="ti-more"></i>Student Result </a></li>  
              
                        {{-- <li><a href="{{ route('setup.shift.view') }}"><i class="ti-more"></i>Student Shift</a></li>
                        <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a></li>
                        <li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category Amount</a></li>
                        <li><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exam Type</a></li>
                        <li><a href="{{ route('school.subject.view') }}"><i class="ti-more"></i>School Subject</a></li>
                        <li><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Assign Subject</a></li>
                        <li><a href="{{ route('designation.view') }}"><i class="ti-more"></i>Designation </a></li>  --}}
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/academics')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Academics</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="ti-more"></i>Optional Subject</a></li>
                        <li class="{{ ($route == 'sections.view')?'active':'' }}"><a href="{{ route('sections.view') }}"><i class="ti-more"></i>Sections</a></li>
                        <li class="{{ ($route == 'student.classall.view')?'active':'' }}"><a href="{{ route('student.classall.view') }}"><i class="ti-more"></i>All Class</a></li>
                        <li class="{{ ($route == 'subjects.view')?'active':'' }}"><a href="{{ route('subjects.view') }}"><i class="ti-more"></i>Subjects</a></li>
                        <li class="{{ ($route == 'classrooms.view')?'active':'' }}"><a href="{{ route('classrooms.view') }}"><i class="ti-more"></i>Class Room</a></li>
                        <li class="{{ ($route == 'classtimetable.view')?'active':'' }}"><a href="{{ route('classtimetable.view') }}"><i class="ti-more"></i>Class Time Setup</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Exam Time Setup</a></li>
                        {{-- <li class="#"><a href="#"><i class="ti-more"></i>Teachers Timetable</a></li> --}}
                        <li class="{{ ($route == 'assignclassteacher.view')?'active':'' }}"><a href="{{ route('assignclassteacher.view') }}"><i class="ti-more"></i>Assign Class Teacher</a></li>
                        <li><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Assign Subject</a></li>
                        <li><a href=""><i class="ti-more"></i>Class Routine</a></li>
                        {{-- <li class="{{ ($route == 'promotestudents.view')?'active':'' }}"><a href="{{ route('promotestudents.view') }}"><i class="ti-more"></i>Promote Students</a></li> --}}
                        {{-- <li class=""><a href=""><i class="ti-more"></i>Subject Group</a></li> --}}
                    </ul>
                </li>



                <li class="treeview {{ ($prefix == '/content')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Study Materials</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == 'uploadcontent.index')?'active':'' }}"><a href="{{route('uploadcontent.index')}}"><i class="ti-more"></i>Upload Content</a></li>
                        <li class="{{ ($route == 'uploadcontent.assignment')?'active':'' }}"><a href="{{route('uploadcontent.assignment')}}"><i class="ti-more"></i>Assignment</a></li>
                        <li class="{{ ($route == 'uploadcontent.syllabus')?'active':'' }}"><a href="{{route('uploadcontent.syllabus')}}"><i class="ti-more"></i>Syllabus</a></li>
                        <li class="{{ ($route == 'uploadcontent.others')?'active':'' }}"><a href="{{route('uploadcontent.others')}}"><i class="ti-more"></i>Others Download</a></li>
                    </ul>
                </li>



                <li class="treeview {{ ($prefix == '/feescollection')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Fees Collection</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == 'fees.group.view')?'active':'' }}"><a href="{{route('fees.group.view')}}"><i class="ti-more"></i>Fees Group</a></li>
                        <li class="{{ ($route == 'fees.type.view')?'active':'' }}"><a href="{{route('fees.type.view')}}"><i class="ti-more"></i>Fees Type</a></li>
                        <!--<li class=""><a href="#"><i class="ti-more"></i>Fees Carry Forward</a></li>-->
                        <li class="{{ ($route == 'fees.master.view')?'active':'' }}"><a href="{{ route('fees.master.view') }}"><i class="ti-more"></i>Fees Master</a></li>   
                        <li class="{{ ($route == 'fees.feescollectionvoucher.create')?'active':'' }}"><a href="{{ route('fees.feescollectionvoucher.create') }}"><i class="ti-more"></i>Collect Fees</a></li>
                        {{-- <li class="{{ ($route == 'fees.feescollectionvoucher.index')?'active':'' }}"><a href="{{ route('fees.feescollectionvoucher.index') }}"><i class="ti-more"></i>Collect Fees List</a></li> --}}
                        <li class="{{ ($route == 'fees.discount.view')?'active':'' }}"><a href="{{ route('fees.discount.view') }}"><i class="ti-more"></i>Fees Discount</a></li>
                        <li class="{{ ($route == 'fees.reminder.view')?'active':'' }}"><a href="{{ route('fees.reminder.view') }}"><i class="ti-more"></i>Fees Reminder</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Search Fees Payments</a></li>         
                        <li class=""><a href="#"><i class="ti-more"></i>Search Due Fees</a></li>         
                        <li class=""><a href="#"><i class="ti-more"></i>Bank Payment</a></li>         
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/accounts')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Accounts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        {{-- <li class="{{ ($route == 'account.class.index')?'active':'' }}"><a href="{{route('account.class.index')}}"><i class="ti-more"></i>Class</a></li>
                        <li class="{{ ($route == 'account.group.index')?'active':'' }}"><a href="{{ route('account.group.index') }}"><i class="ti-more"></i>Group list</a></li>
                        <li class="{{ ($route == 'account.group.create')?'active':'' }}"><a href="{{ route('account.group.create') }}"><i class="ti-more"></i>Group Create</a></li>
                        <li class="{{ ($route == 'account.subgroup.index')?'active':'' }}"><a href="{{ route('account.subgroup.index') }}"><i class="ti-more"></i>Sub-Group list</a></li>
                        <li class="{{ ($route == 'account.subgroup.create')?'active':'' }}"><a href="{{ route('account.subgroup.create') }}"><i class="ti-more"></i>Sub-Group Create</a></li>
                        <li class="{{ ($route == 'account.ledger.index')?'active':'' }}"><a href="{{ route('account.ledger.index') }}"><i class="ti-more"></i>Ledger list</a></li>
                        <li class="{{ ($route == 'account.ledger.create')?'active':'' }}"><a href="{{ route('account.ledger.create') }}"><i class="ti-more"></i>Ledger Create</a></li>
                        <li class="{{ ($route == 'account.paymentvoucher.index')?'active':'' }}"><a href="{{ route('account.paymentvoucher.index') }}"><i class="ti-more"></i>Payment Voucher List</a></li>
                        <li class="{{ ($route == 'account.paymentvoucher.create')?'active':'' }}"><a href="{{ route('account.paymentvoucher.create') }}"><i class="ti-more"></i>Payment Voucher Create</a></li>
                        <li class="{{ ($route == 'account.receivevoucher.index')?'active':'' }}"><a href="{{ route('account.receivevoucher.index') }}"><i class="ti-more"></i>Receive Voucher List</a></li>
                        <li class="{{ ($route == 'account.receivevoucher.create')?'active':'' }}"><a href="{{ route('account.receivevoucher.create') }}"><i class="ti-more"></i>Receive Voucher Create</a></li>
                        <li class="{{ ($route == 'account.journal.index')?'active':'' }}"><a href="{{ route('account.journal.index') }}"><i class="ti-more"></i>Journal Entry List</a></li>
                        <li class="{{ ($route == 'account.journal.create')?'active':'' }}"><a href="{{ route('account.journal.create') }}"><i class="ti-more"></i>Journal Entry Create</a></li>
                        <li class="{{ ($route == 'account.expensevoucher.index')?'active':'' }}"><a href="{{ route('account.expensevoucher.index') }}"><i class="ti-more"></i>Expense Voucher List</a></li>
                        <li class="{{ ($route == 'account.expensevoucher.create')?'active':'' }}"><a href="{{ route('account.expensevoucher.create') }}"><i class="ti-more"></i>Expense Voucher Create</a></li>

                        <li class=""><a href="#"><i class="ti-more"></i>Student Fee</a></li>
                        <li class="{{ ($route == 'account.salary.view')?'active':'' }}"><a href="{{ route('account.salary.view') }}"><i class="ti-more"></i>Employee Salary</a></li>

                        <li class="{{ ($route == 'other.cost.view')?'active':'' }}"><a href="{{ route('other.cost.view') }}"><i class="ti-more"></i>Other Cost</a></li>                         <li class="{{ ($route == 'student.fee.view')?'active':'' }}"><a href="#"><i class="ti-more"></i>Bank List</a></li>
                        <li class="{{ ($route == 'account.bank.create')?'active':'' }}"><a href="{{ route('account.bank.create') }}"><i class="ti-more"></i>Add Bank</a></li>
                        <li class="{{ ($route == 'account.bankaccount.index')?'active':'' }}"><a href="{{ route('account.bankaccount.index') }}"><i class="ti-more"></i>Bank Account</a></li>
                        <li class="{{ ($route == 'account.bankaccount.create')?'active':'' }}"><a href="{{ route('account.bankaccount.create') }}"><i class="ti-more"></i>Add Bank Account</a></li>
                        <li class="{{ ($route == 'account.mobileaccount.index')?'active':'' }}"><a href="{{ route('account.mobileaccount.index') }}"><i class="ti-more"></i>Mobile Account</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>All Transaction</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Add Transaction</a></li> --}}
                        <li class=""><a href="#"><i class="ti-more"></i>Chart of Account</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Profit & loss</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Income</a></li>
                        <li class="{{ ($route == 'account.expensevoucher.index')?'active':'' }}"><a href="{{ route('account.expensevoucher.index') }}"><i class="ti-more"></i>Expense</a></li>
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/humanresource')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Human Resource</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('employee.designation.view') }}"><i class="ti-more"></i>Designation </a></li>
                        <li><a href="{{ route('employee.department.view') }}"><i class="ti-more"></i>Department </a></li>
                        <li  class="{{ ($route == 'employee.registration.view')?'active':'' }}"><a href="{{ route('employee.registration.view') }}"><i class="ti-more"></i>Add Staff</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Staff Directory</a></li>
                        <li><a href="{{ route('employee.attendance.view') }}"><i class="ti-more"></i>Staff Attendance</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Staff Attendance Report</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Payroll</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Payroll Report</a></li>
                        {{-- <li  class="{{ ($route == 'employee.salary.view')?'active':'' }}"><a href="{{ route('employee.salary.view') }}"><i class="ti-more"></i>Employee Salary</a></li> --}}
                        {{-- <li><a href="{{ route('employee.monthly.salary') }}"><i class="ti-more"></i>Employee Monthly Salary</a></li> --}}
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/leave')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Leave</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ route('employee.leavetype.view') }}"><i class="ti-more"></i>Leave Type</a></li>
                        <li><a href="{{ route('employee.leave.view') }}"><i class="ti-more"></i>Staff Leave</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Approve Leave Request</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Pending Leave</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Apply Leave</a></li>
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/examination')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Examintaion</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href=""><i class="ti-more"></i>Marks Grade</a></li>
                        <li><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exam Type</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Exam Setup</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Exam Schedule</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Exam Attendance</a></li>
                        <li class="{{ ($route == 'marks.entry.add')?'active':'' }}"><a href="{{ route('marks.entry.add') }}"><i class="ti-more"></i>Marks Entry</a></li> 
                        <li class="{{ ($route == 'marks.entry.edit')?'active':'' }}"><a href="{{ route('marks.entry.edit') }}"><i class="ti-more"></i>Marks Edit</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Send Marks by SMS</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Question Group</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Question Bank</a></li>                        
                        <li class=""><a href=""><i class="ti-more"></i>Online Exam</a></li>
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/homeworks')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Home Works</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="ti-more"></i>Add Home Works</a></li>
                        <li><a href=""><i class="ti-more"></i>Homework List</a></li>
                        <li><a href=""><i class="ti-more"></i>Homework Report</a></li>
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/communicate')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Communicate</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == 'notice.viewlist')?'active':'' }}"><a href="{{ route('notice.viewlist') }}"><i class="ti-more"></i>Notice Board</a></li>
                        <li class="{{ ($route == 'notice.create')?'active':'' }}"><a href="{{ route('notice.create') }}"><i class="ti-more"></i>Add Notice </a></li>
                        <li><a href=""><i class="ti-more"></i>Email/SMS Log</a></li>
                        <li class=""><a href="{{route('manage_events')}}"><i class="ti-more"></i>Events</a></li>
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/library')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span> Library </span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="ti-more"></i>Book Categories</a></li>
                        <li><a href=""><i class="ti-more"></i>subject</a></li>
                        <li><a href=""><i class="ti-more"></i>Add Book</a></li>
                        <li class="{{ ($route == 'library.book.view_book')?'active':'' }}"><a href="{{ route('library.book.view_book') }}"><i class="ti-more"></i>Book List</a></li>
                        <li class="{{ ($route == 'addstudent.view')?'active':'' }}"><a href="{{ route('addstudent.view') }}"><i class="ti-more"></i>Add Member</a></li>
                        <li class="{{ ($route == 'library.issuereturn.index')?'active':'' }}"><a href="{{ route('library.issuereturn.index') }}"><i class="ti-more"></i>Issue/Return Book</a></li>
                        <li><a href=""><i class="ti-more"></i>All Issued Book</a></li>
                        {{-- <li class="{{ ($route == 'addstaffmember.view')?'active':'' }}"><a href="{{ route('addstaffmember.view') }}"><i class="ti-more"></i>Add Staff Member</a></li> --}}
                        
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/inventory')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span> Inventory </span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == 'inventory.itemcategory.view')?'active':'' }}"><a href="{{ route('inventory.itemcategory.view') }}"><i class="ti-more"></i>Item Category</a></li>
                        <li class="{{ ($route == 'inventory.additem.view')?'active':'' }}"><a href="{{ route('inventory.additem.view') }}"><i class="ti-more"></i>Add Item</a></li>
                        <li class="{{ ($route == 'inventory.issueitem.view')?'active':'' }}"><a href="{{route('inventory.issueitem.view')}}"><i class="ti-more"></i>Item List</a></li>
                        <li class="{{ ($route == 'inventory.itemstore.view')?'active':'' }}"><a href="{{route('inventory.itemstore.view')}}"><i class="ti-more"></i>Item Store</a></li>
                        <li class="{{ ($route == 'inventory.itemsupplier.view')?'active':'' }}"><a href="{{ route('inventory.itemsupplier.view') }}"><i class="ti-more"></i>Item Supplier</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Item Receive</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Item Receive List</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Item Sell</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Item Issue</a></li>
                        <li class="{{ ($route == 'inventory.additemstock.view')?'active':'' }}"><a href="{{ route('inventory.additemstock.view') }}"><i class="ti-more"></i>Add Stock Item</a></li>
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/transport')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span> Transport </span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                    <li class="{{ ($route == 'routes.view')?'active':'' }}"><a href="{{ route('routes.view') }}"><i class="ti-more"></i>Routes</a></li>
                        <li class="{{ ($route == 'vehicles.view')?'active':'' }}"><a href="{{ route('vehicles.view') }}"><i class="ti-more"></i>Vehicles</a></li>
                        <li class="{{ ($route == 'assignvehicle.view')?'active':'' }}"><a href="{{ route('assignvehicle.view') }}"><i class="ti-more"></i>Assign Vehicle</a></li>     
                        <li class=""><a href=""><i class="ti-more"></i>Student Transport Report</a></li>                   
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/hostel')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Hostel </span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == 'hostel.hosteldetail.view')?'active':'' }}"><a href="{{ route('hostel.hosteldetail.view') }}"><i class="ti-more"></i>Hostel List</a></li>
                        <li class="{{ ($route == 'roomtype.view')?'active':'' }}"><a href="{{ route('roomtype.view') }}"><i class="ti-more"></i>Room Type</a></li>
                        <li class="{{ ($route == 'hostelroom.view')?'active':'' }}"><a href="{{ route('hostelroom.view') }}"><i class="ti-more"></i>Hostel Rooms</a></li>
                        <li class=""><a href=""><i class="ti-more"></i>Hostel Application</a></li>                   
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/webmenagement')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Website Menagement</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        {{-- <li class=""><a href="#"><i class="ti-more"></i>Event</a></li>
                        <li class="{{ ($route == 'gallery.index')?'active':'' }}"><a href="{{ route('gallery.index') }}"><i class="ti-more"></i>Gallery Image</a></li>
                        <li class="{{ ($route == 'bot.index')?'active':'' }}"><a href="{{ route('bot.index') }}"><i class="ti-more"></i>BOT</a></li>
                        <li class="{{ ($route == 'fincom.index')?'active':'' }}"><a href="{{ route('fincom.index') }}"><i class="ti-more"></i>FinCom</a></li>
                        <li class="{{ ($route == 'academiccouncil.index')?'active':'' }}"><a href="{{ route('academiccouncil.index') }}"><i class="ti-more"></i>Academiccouncil</a></li>
                        <li class="{{ ($route == 'dean.index')?'active':'' }}"><a href="{{ route('dean.index') }}"><i class="ti-more"></i>Deans</a></li>
                        <li class="{{ ($route == 'administration.index')?'active':'' }}"><a href="{{ route('administration.index') }}"><i class="ti-more"></i>Administration</a></li>
                        <li class="{{ ($route == 'complaintcom.index')?'active':'' }}"><a href="{{ route('complaintcom.index') }}"><i class="ti-more"></i>Complaintcommittee</a></li>
                        <li class="{{ ($route == 'disciplinarycommittee.index')?'active':'' }}"><a href="{{ route('disciplinarycommittee.index') }}"><i class="ti-more"></i>Disciplinarycommittee</a></li>
                        <li class="{{ ($route == 'syndicate.index')?'active':'' }}"><a href="{{ route('syndicate.index') }}"><i class="ti-more"></i>Syndicate</a></li>
                        <li class="{{ ($route == 'contact.index')?'active':'' }}"><a href="{{ route('contact.index') }}"><i class="ti-more"></i>Contact Page</a></li>
                        <li class="{{ ($route == 'webinfo.contact.message')?'active':'' }}"><a href="{{ route('webinfo.contact.message') }}"><i class="ti-more"></i>Contact Message </a></li>
                       
                        <li class="{{ ($route == 'newsevent.view')?'active':'' }}"><a href="{{ route('newsevent.view') }}"><i class="ti-more"></i>Add News Event </a></li>
                        <li class="{{ ($route == 'newsevent.view')?'active':'' }}"><a href="{{ route('newsevent.view') }}"><i class="ti-more"></i>News Event List</a></li>
                        <li class="{{ ($route == 'visitorsays.view')?'active':'' }}"><a href="{{ route('visitorsays.view') }}"><i class="ti-more"></i>Visitorsays</a></li>
                        <li class="{{ ($route == 'socialgroup.index')?'active':'' }}"><a href="{{ route('socialgroup.index') }}"><i class="ti-more"></i>Socialgroup</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Media Manager</a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Pages </a></li>
                        <li class=""><a href="#"><i class="ti-more"></i>Menus </a></li>
                        <li class="{{ ($route == 'Websiteinfo.view')?'active':'' }}"><a href="{{ route('Websiteinfo.view') }}"><i class="ti-more"></i>Website Information </a></li>
                        <li class="{{ ($route == 'slider.index')?'active':'' }}"><a href="{{ route('slider.index') }}"><i class="ti-more"></i>Slider Image</a></li> --}}
                        <li class="{{ ($route == 'Websiteinfo.view')?'active':'' }}"><a href="{{ route('Websiteinfo.view') }}"><i class="ti-more"></i>Website Information </a></li>
                    </ul>
                </li>


                <li class="treeview {{ ($prefix == '/report')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span>Reports</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href=""><i class="ti-more"></i>Students Report</a></li>                   
                        <li class=""><a href=""><i class="ti-more"></i>Guardian Report</a></li>                   
                        <li class=""><a href=""><i class="ti-more"></i>Accounts Report</a></li>                   
                        <li class=""><a href=""><i class="ti-more"></i>Transaction Report</a></li>                   
                        <li class=""><a href=""><i class="ti-more"></i>Class Report</a></li>                   
                        <li class=""><a href=""><i class="ti-more"></i>Teacher Report</a></li>                   
                        <li class=""><a href=""><i class="ti-more"></i>Result Report</a></li>   
                        <li class="{{ ($route == 'attendance.report.view')?'active':'' }}"><a href="{{ route('attendance.report.view') }}"><i class="ti-more"></i>Attendance Report</a></li> 
                        <li class=""><a href=""><i class="ti-more"></i>Hostel Report</a></li>                                  
                        <li class=""><a href=""><i class="ti-more"></i>Marksheet Report</a></li>                                  
                        {{-- <li class="{{ ($route == 'monthly.profit.view')?'active':'' }}"><a href="{{ route('monthly.profit.view') }}"><i class="ti-more"></i>Monthly-Yearly Profite</a></li> --}}
                        {{-- <li class="{{ ($route == 'marksheet.generate.view')?'active':'' }}"><a href="{{ route('marksheet.generate.view') }}"><i class="ti-more"></i>MarkSheet Generate</a></li> --}}
                        {{-- <li class="{{ ($route == 'student.result.view')?'active':'' }}"><a href="{{ route('student.result.view') }}"><i class="ti-more"></i>Student Result </a></li> --}}
                    </ul>
                </li>













                


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
                        <i data-feather="grid"></i> <span>Manage Profile</span>
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
