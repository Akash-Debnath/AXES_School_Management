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
                                            <th>dept</th>
                                            <th>student_mobile</th>
                                            <th>student_email</th>
                                            <th width="25%">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($registers as $register )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $register->student_id }}</td>
                                                <td> {{ $register->dept }}</td>
                                                <td> {{ $register->student_mobile }}</td>
                                                <td> {{ $register->student_email }}</td>
                                                <td>
{{--                                                    <a href="" class="btn btn-info">Edit</a>--}}
{{--                                                    <a href="{{route('delete_register',['id'=>$register->id])}}" class="btn btn-danger" id="delete">Delete</a>--}}

                                                </td>

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
