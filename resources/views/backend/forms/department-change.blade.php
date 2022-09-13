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
                                <h3 class="box-title">Department Change list</h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>student_name</th>
                                            <th>campus</th>
                                            <th>current_sem</th>
                                            <th>current_sem_year</th>
                                            <th>student_mobile</th>
                                            <th>student_email</th>
                                            <th>present_dept</th>
                                            <th>to_be_dept</th>
                                            <th>apply_reason</th>

{{--                                            <th width="25%">Action</th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($departmentchange as $department )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $department->student_name }}</td>
                                                <td> {{ $department->campus }}</td>
                                                <td> {{ $department->current_sem }}</td>
                                                <td> {{ $department->current_sem_year }}</td>
                                                <td> {{ $department->student_mobile }}</td>
                                                <td> {{ $department->student_email }}</td>
                                                <td> {{ $department->present_dept }}</td>
                                                <td> {{ $department->to_be_dept }}</td>
                                                <td> {{ $department->apply_reason }}</td>
{{--                                                <td>--}}
{{--                                                    <a href="" class="btn btn-info">Edit</a>--}}
{{--                                                    <a href="" class="btn btn-danger" id="delete">Delete</a>--}}

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
