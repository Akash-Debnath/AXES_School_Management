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
                                <h3 class="box-title">Course Add list</h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>student_id</th>
                                            <th>student_name</th>
                                            <th>dept_name</th>
                                            <th>campus</th>
                                            <th>current_sem</th>
                                            <th>current_sem_year</th>
                                            <th>student_mobile</th>
                                            <th>student_email</th>
                                            <th>course_name</th>
                                            <th>paid_amount</th>
                                            <th>paid_date</th>
                                            <th>payment_option</th>
                                            {{--                                            <th width="25%">Action</th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($improvments as $improvement )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $improvement->student_id }}</td>
                                                <td> {{ $improvement->student_name }}</td>
                                                <td> {{ $improvement->dept_name }}</td>
                                                <td> {{ $improvement->campus }}</td>
                                                <td> {{ $improvement->current_sem }}</td>
                                                <td> {{ $improvement->current_sem_year }}</td>
                                                <td> {{ $improvement->student_mobile }}</td>
                                                <td> {{ $improvement->student_email }}</td>
                                                <td> {{ $improvement->course_name }}</td>
                                                <td> {{ $improvement->paid_amount }}</td>
                                                <td> {{ $improvement->paid_date }}</td>
                                                <td> {{ $improvement->payment_option }}</td>
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
