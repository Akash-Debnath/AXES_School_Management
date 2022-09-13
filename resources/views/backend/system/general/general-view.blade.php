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
                                <h3 class="box-title">general setting</h3>
{{--                                <a href="{{ route('assign.subject.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Assign Subject</a>--}}

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>school_name</th>
                                            <th>school_code</th>
                                            <th>address</th>
                                            <th>school_phone</th>
                                            <th>school_email</th>
                                            <th>sch_session_id</th>
                                            <th>sch_start_month</th>
                                            <th>attendance</th>
                                            <th>bio_attendance</th>
                                            <th>biometric_device</th>
                                            <th>sch_lang_id</th>
                                            <th>lan_mode</th>
                                            <th>sch_date_format</th>
                                            <th>sch_timezone</th>
                                            <th>sch_start_week</th>
                                            <th>sch_currency</th>
                                            <th>sch_currency_symbol</th>
                                            <th>currency_place</th>
                                            <th>admission_no</th>
                                            <th>adm_prefix</th>
                                            <th>adm_no_digit</th>
                                            <th>adm_start_from</th>
                                            <th>staff_id</th>
                                            <th>staffid_prefix</th>
                                            <th>staffid_no_digit</th>
                                            <th>staffid_start_from</th>
                                            <th>show_me_question</th>
                                            <th>duplicate_fee</th>
                                            <th>fee_due_days</th>
                                            <th>online_admission</th>
                                            <th>teacher_rest</th>
                                            <th>mobile_api_url</th>
                                            <th>app_primary_color_code</th>
                                            <th>app_secondary_color_code</th>
                                            <th>current_theme</th>
                                            <th width="25%">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allData as $key => $assign )
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td> {{ $assign->school_name }}</td>
                                                <td> {{ $assign->school_code }}</td>
                                                <td> {{ $assign->address }}</td>
                                                <td> {{ $assign->school_phone }}</td>
                                                <td> {{ $assign->school_email }}</td>
                                                <td> {{ $assign->sch_session_id }}</td>
                                                <td> {{ $assign->sch_start_month }}</td>
                                                <td> {{ $assign->attendance }}</td>
                                                <td> {{ $assign->bio_attendance }}</td>
                                                <td> {{ $assign->biometric_device }}</td>
                                                <td> {{ $assign->sch_lang_id }}</td>
                                                <td> {{ $assign->lan_mode }}</td>
                                                <td> {{ $assign->sch_date_format }}</td>
                                                <td> {{ $assign->sch_timezone }}</td>
                                                <td> {{ $assign->sch_start_week }}</td>
                                                <td> {{ $assign->sch_currency }}</td>
                                                <td> {{ $assign->sch_currency_symbol }}</td>
                                                <td> {{ $assign->currency_place }}</td>
                                                <td> {{ $assign->adm_prefix }}</td>
                                                <td> {{ $assign->adm_no_digit }}</td>
                                                <td> {{ $assign->adm_start_from }}</td>
                                                <td> {{ $assign->staff_id }}</td>
                                                <td> {{ $assign->staffid_prefix }}</td>
                                                <td> {{ $assign->staffid_no_digit }}</td>
                                                <td> {{ $assign->staffid_start_from }}</td>
                                                <td> {{ $assign->show_me_question }}</td>
                                                <td> {{ $assign->duplicate_fee }}</td>
                                                <td> {{ $assign->fee_due_days }}</td>
                                                <td> {{ $assign->online_admission }}</td>
                                                <td> {{ $assign->teacher_rest }}</td>
                                                <td> {{ $assign->mobile_api_url }}</td>
                                                <td> {{ $assign->app_primary_color_code }}</td>
                                                <td> {{ $assign->app_secondary_color_code }}</td>
                                                <td> {{ $assign->current_theme }}</td>
                                                <td>
                                                    <a href="{{ route('assign.subject.edit',$assign->class_id ) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('assign.subject.details',$assign->class_id ) }}" class="btn btn-primary" >Details</a>

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
