@extends('admin.admin_master')
@section('admin')


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">



                    <div class="col-12">

                        <div class="box">
                             <div class="box-header with-border">
                                <h3 class="box-title">AdmitCard List</h3>
                                
                            </div>
                            
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>Student_id</th>
                                            <th>Department</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
{{--                                            <th width="25%">Action</th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($admitcards as $admitcard )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $admitcard->student_id }}</td>
                                                <td> {{ $admitcard->st_department }}</td>
                                                <td> {{ $admitcard->student_name }}</td>
                                                <td> {{ $admitcard->student_email }}</td>
                                                <td> {{ $admitcard->student_mobile }}</td>
{{--                                                <td>--}}
{{--                                                    <a href="{{ route('employee.department.edit',$employeedepartment->id) }}" class="btn btn-info">Edit</a>--}}
{{--                                                    <a href="{{ route('employee.department.delete',$employeedepartment->id) }}" class="btn btn-danger" id="delete">Delete</a>--}}

{{--                                                </td>--}}

                                            </tr>
                                        @endforeach

                                        </tbody>

                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>





@endsection
