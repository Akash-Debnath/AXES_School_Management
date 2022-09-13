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
                                <h3 class="box-title">Permission list</h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>application_for</th>
                                            <th>student_id</th>
                                            <th>student_name</th>
                                            <th>dept_name</th>
                                            <th>campus</th>
                                            <th>current_sem</th>
                                            <th>current_sem_year</th>
                                            <th>student_mobile</th>
                                            <th>student_email</th>
                                            <th>father_name</th>
                                            <th>father_occupation</th>
                                            <th>father_number</th>
                                            <th>last_paid_amou</th>
                                            <th>current_due</th>
                                            <th>pay_within</th>
                                            <th>apply_reason</th>
                                            <th>member_image</th>

{{--                                            <th width="25%">Action</th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($permissions as $permission )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $permission->application_for }}</td>
                                                <td> {{ $permission->student_id }}</td>
                                                <td> {{ $permission->student_name }}</td>
                                                <td> {{ $permission->dept_name }}</td>
                                                <td> {{ $permission->campus }}</td>
                                                <td> {{ $permission->current_sem }}</td>
                                                <td> {{ $permission->current_sem_year }}</td>
                                                <td> {{ $permission->student_mobile }}</td>
                                                <td> {{ $permission->student_email }}</td>
                                                <td> {{ $permission->father_name }}</td>
                                                <td> {{ $permission->father_occupation }}</td>
                                                <td> {{ $permission->father_number }}</td>
                                                <td> {{ $permission->last_paid_amou }}</td>
                                                <td> {{ $permission->current_due }}</td>
                                                <td> {{ $permission->pay_within }}</td>
                                                <td> {{ $permission->apply_reason }}</td>
                                                <td> {{ $permission->member_image }}</td>
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
