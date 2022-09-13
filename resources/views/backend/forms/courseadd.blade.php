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
                                            <th>student_name</th>
                                            <th>dept_name</th>
                                            <th>campus</th>
                                            <th>completed_credit</th>
                                            <th>current_cgpa</th>
                                            <th>current_sem</th>
                                            <th>current_sem_year</th>
                                            <th>student_mobile</th>
                                            <th>student_email</th>
                                            <th>registered_course</th>
                                            <th>add_course</th>
                                            <th>drop_course</th>
{{--                                            <th width="25%">Action</th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($courseadd as $addcourse )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $addcourse->student_name }}</td>
                                                <td> {{ $addcourse->dept_name }}</td>
                                                <td> {{ $addcourse->campus }}</td>
                                                <td> {{ $addcourse->completed_credit }}</td>
                                                <td> {{ $addcourse->current_cgpa }}</td>
                                                <td> {{ $addcourse->current_sem }}</td>
                                                <td> {{ $addcourse->current_sem_year }}</td>
                                                <td> {{ $addcourse->student_mobile }}</td>
                                                <td> {{ $addcourse->student_email }}</td>
                                                <td> {{ $addcourse->registered_course }}</td>
                                                <td> {{ $addcourse->add_course }}</td>
                                                <td> {{ $addcourse->drop_course }}</td>
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
