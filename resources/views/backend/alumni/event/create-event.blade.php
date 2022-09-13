@extends('admin.admin_master')
@section('admin')


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">
                        <div class="box bb-3 border-warning">
                            <div class="box-header">
                                <h4 class="box-title">Student <strong>Search</strong></h4>
                            </div>

                            <div class="box-body">
                                <form method="GET" action="{{route('new_event')}}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Event Title <span class="text-danger"> </span></h5>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="title">
                                                </div>
                                            </div>
                                        </div> <!-- End Col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Department <span class="text-danger"> </span></h5>
                                                <div class="controls">
                                                    <select name="dept_name"  required="" class="form-control">
                                                        <option value="" selected="" >Select Departent</option>
                                                        @foreach($departments as $department)
                                                            <option value="{{ $department->name }}" {{ (@$dept_id == $department->id)? "selected":"" }}>{{ $department->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- End Col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Date <span class="text-danger"> </span></h5>
                                                <div class="controls">
                                                    <input type="date" class="form-control" name="date">
                                                </div>
                                            </div>
                                        </div> <!-- End Col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Start Time <span class="text-danger"> </span></h5>
                                                <div class="controls">
                                                    <input type="time" class="form-control" name="start_time">
                                                </div>
                                            </div>
                                        </div> <!-- End Col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>End Time <span class="text-danger"> </span></h5>
                                                <div class="controls">
                                                    <input type="time" class="form-control" name="end_time">
                                                </div>
                                            </div>
                                        </div> <!-- End Col md 4 -->

                                    </div><!--  end row -->
                                    <div class="row">
                                        <div class="col-md-4" style="padding-top: 25px;">
                                            <input type="submit" class="btn btn-rounded btn-dark mb-5"  value="Save">
                                        </div> <!-- End Col md 4 -->
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div> <!-- // end first col 12 -->




                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Student List</h3>
                                {{--                                <a href="{{ route('student.registration.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Student  </a>--}}

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">

{{--                                    @if($search=='')--}}
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                <th>Title</th>
                                                <th>Department Name</th>
                                                <th>Date</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th width="25%">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($events as $event )
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$event->title}}</td>
                                                    <td>{{$event->dept_name}}</td>
                                                    <td>{{$event->date}}</td>
                                                    <td>{{$event->start_time}}</td>
                                                    <td>{{$event->end_time}}</td>
                                                    <td>
{{--                                                        <a title="Edit" href="{{ route('edit_event',$event->id) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>--}}

{{--                                                        <a title="Promotion" href="{{ route('student.registration.promotion',$value->student_id) }}" class="btn btn-primary" ><i class="fa fa-check"></i></a>--}}

                                                        <a target="_blank" title="delete" href="{{ route('delete_event',$event->id) }}" class="btn btn-danger"  ><i class="fa fa-trash"></i></a>

                                                    </td>

                                                </tr>
                                            @endforeach

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>

{{--                                    @else--}}


{{--                                    @endif--}}



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
