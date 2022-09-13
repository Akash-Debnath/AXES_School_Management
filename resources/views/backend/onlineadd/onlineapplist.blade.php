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
				  <h3 class="box-title">Online Application List</h3>
	{{-- <a href="#" style="float: right;" class="btn btn-rounded btn-success mb-5"> Update Status</a> --}}

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
                            <tr>
                                <th width="5%">SL</th>
                                <th width="15%">Student Name</th>
                                <th width="10%">Phone</th>
                                <th width="10%">Gender</th>
								                <th width="10%">Status</th>
                                <th width="10%">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                              $i=1;
                                @endphp
                        @foreach($data as $datas)
                            <tr>
                                <td width="5%">{{$i++}}</td>
                                <td width="10%">{{$datas->firstname}} {{$datas->lastname}}</td>
                                <td width="20%">{{$datas->phone}}</td>
                                <td width="30%">{{$datas->gender}}</td>
                                <td width="30%">
                                    @php
                                        if($datas->status == '1'){
                                            echo'Pending';
                                        }elseif($datas->status == '2'){
                                            echo'Approve';
                                        }elseif($datas->status == '4'){
                                            echo'Enroll';
                                        }else{
                                            echo'Reject';
                                        }
                                    @endphp
                                </td>
                                <td width="15%">
                                	@if($datas->status=='1')
                                  <a href="{{ route('onlineapp.approve',$datas->id ) }}" style='width:100px;' class="btn btn-info">Approve</a>
                                  <a href="{{ route('onlineapp.reject',$datas->id ) }}" style='width:100px;' class="btn btn-warning" >Reject</a>
                                  @endif
                                  <a href="{{ route('onlineapp.view.details',$datas->sid ) }}" style='width:100px;' class="btn btn-primary" >View</a>
                                  @if($datas->status=='2')
                                  <a href="{{ route('onlineapp.enroll',$datas->id ) }}" style='width:100px;' class="btn btn-success" >Enroll</a>
                                  @endif
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
