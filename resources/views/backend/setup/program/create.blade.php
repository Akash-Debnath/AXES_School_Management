@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

            <section class="content">

                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Add Program</h4>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('store.program') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-5">
                                        
                                            <div class="form-group">
                                                <h5>Faculty<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="fid" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Faculty</option>
                                                        @foreach($allData as $faculty )
                                                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                                        @endforeach	 
                                                        </select>
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div>
                                        <div class="col-md-5">
                                    
                                            <div class="form-group">
                                                <h5>Department <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="did" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Department</option>
                                                        @foreach($departments as $department )
                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                        @endforeach	 
                                                    </select>
                                                </div>
                                            </div> <!-- // end form group -->
                            
                            
                                        </div> <!-- End col-md-5 -->
                                    </div>
                                       
                                                                
                                    <div class="row">

                                        
                            
                                        <div class="col-md-12">
                                            
                                            <div class="form-group">
                                                <h5>Program Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" > 
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                            
                                                </div><!-- End col-md-5 -->
                                            </div> <!-- end Row -->
                                        </div>
                                    </div>

                                    <div class="row"> <!-- 1st Row -->

                                        <div class="col-md-8">
                            
                                            <div class="form-group">
                                                <h5>Link <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                        <input type="text" name="link" class="form-control" required="" >
                                                </div>
                                            </div>
                            
                                        </div> <!-- End Col md 4 -->
                                         <div class="col-md-4">
                                
                                                <div class="form-group">
                                                    <h5>Code<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                            <input type="varchar" name="code" class="form-control" required="" >
                                                    </div>
                                                </div>
                                
                                            </div>
                                     </div>
                            
                            
                            
                                        <div class="row"> <!-- 5TH Row -->
                                                <div class="col-md-5">
                            
                                                    <div class="form-group">
                                                        <h5>Image<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" class="form-control" id="logo" >
                                                        </div>
                                                    </div>
                            
                                                </div> <!-- End Col md 4 -->
                            
                            
                                                <div class="col-md-5">
                            
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage1" src="{{ url('') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
                            
                                                        </div>
                                                    </div>
                            
                                                </div> <!-- End Col md 4 -->
                            
                            
                            
                                        </div> <!-- End 5TH Row -->
                                        <div class="row">
                                            <div class="col-md-10">
                            
                                                <div class="form-group">
                                                    <h5>Description <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <textarea name="description" id="description" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">
                            
                                                            </textarea>
                                                        </div>
                                                </div>
                            
                                            </div>
                            
                                        </div>
                 



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



  <script type="text/javascript">
    $(document).ready(function(){
        $('#logo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage1').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>


@endsection
