@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

            <section class="content">

                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Add Employee Department</h4>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('employee.store.department') }}"> 
                                    @csrf
                                
            
                
            
                                        
                                                                    
                                        <div class="row">

                                            {{-- <div class="col-md-5">
                                
                                                <div class="form-group">
                                                    <h5>Faculty <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="fid" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Faculty</option>
                                                        @foreach($allData as $faculty )
                                                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                                        @endforeach	 
                                                        </select>
                                                    </div>
                                                </div> <!-- // end form group -->
                                
                                
                                            </div> <!-- End col-md-5 --> --}}
                                
                                            <div class="col-md-5">
                                                
                                                <div class="form-group">
                                                    <h5>Department Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="name" class="form-control" > 
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                
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
