@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

            <section class="content">

                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Edit Vehicle On Route</h4>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('update.assignvehicle', $editData->id)}}"  enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                                                    
                                        <div class="row">

                                            <div class="col-md-5">

                                                <div class="box-body">
                                                    <input type="hidden" name="ci_csrf_token" value="1"> 
                                
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Route</label><small class="req"> *</small>
                    
                                                                <select name="route" required="" class="form-control">
                                                                    <option value="" selected="" disabled="">Select</option>
                                                                    @foreach($transportroutes as $transportroute)
                                                                    <option value="{{ $transportroute->route_title }}">{{ $transportroute->route_title }}</option>
                                                                    @endforeach  
                                                                </select>
                                                              <span class="text-danger"></span>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Vehicle</label> <small class="req"> *</small>
                                                            <select name="vehicle" required="" class="form-control">
                                                                <option value="" selected="" disabled="">Select</option>
                                                                @foreach($vehicles as $vehicle)
                                                                <option value="{{ $vehicle->vehicle_no }}">{{ $vehicle->vehicle_no }}</option>
                                                                @endforeach  
                                                            </select>
                                                            <span class="text-danger"></span>
                                                        </div>
                
                                                </div><!-- /.box-body -->                                
                                                                           
                                            </div><!-- End col-md-5 -->
                                            
                                        </div> <!-- end Row -->
                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                        </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

            </section>
	  
	  </div>
  </div>

@endsection
