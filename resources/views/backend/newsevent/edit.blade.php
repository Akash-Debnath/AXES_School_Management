@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->


<section class="content">

         <!-- Basic Forms -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Edit Newsevent</h4>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col">

     <form method="POST" action="{{ route('newsevent.update',$editData->id) }}"enctype="multipart/form-data">
        @csrf
                      @method('PUT')



            <div class="row"> <!-- 1st Row -->

                <div class="col-md-12">
                    <div class="form-group">
                        <h5>Title <span class="text-danger">*</span></h5>
                        <div class="controls">
                                <input type="text" name="title"  class="form-control" required="" value="{{ $editData->title }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Description <span class="text-danger">*</span></h5>
                        <div class="controls">
                                <input type="text" name="description" value="{{ $editData->description }}"class="form-control" required="" >
                        </div>
                    </div>

                </div> <!-- End Col md 4 -->

        </div> <!-- End 1stRow -->

         {{-- <div class="row"> <!-- 1st Row -->

            <div class="col-md-12">

                <div class="form-group">
                    <h5>Description<span class="text-danger">*</span></h5>
                    <div class="controls">
                            <input type="text" name="email" value="{{ $noticedata->description }}" class="form-control" required="" >
                    </div>
                </div>
                
               
                <div class="form-group">
                    <h5>Detail<span class="text-danger">*</span></h5>
                    <div class="controls">
                            <input type="textarea" name="detail" value="{{ $bot->detail }}" class="form-control" required="" >
                            
                        </div>
                </div>

             <!-- End Col md 4 -->
         </div>
         </div> --}}


            <div class="row"> <!-- 5TH Row -->
                    <div class="col-md-6">

                        <div class="form-group">
                            <h5> Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" value="{{ $editData->image }}" class="form-control" id="logo" >
                            </div>
                        </div>

                    </div> <!-- End Col md 4 -->


                    <div class="col-md-6">

                        <div class="form-group">
                            <div class="controls">
                                <img id="showImage1" src="{{ url('') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">

                            </div>
                        </div>

                    </div> <!-- End Col md 4 -->



            </div> <!-- End 5TH Row -->
            {{-- <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <h5>Detail <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea name="detail" value="{{ $bot->detail }}" id="detail" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">

                                </textarea>
                            </div>
                    </div>

                </div>

            </div> --}}






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




@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Newsevent</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

					<form method="post"  action="{{ route('newsevent.store') }}" enctype="multipart/form-data">

	 	@csrf
					  <div class="row">
						<div class="col-12">	


<div class="row">
	

	<div class="col-md-12" >		
	<div class="form-group">
		<h5>Title<span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="title" class="form-control" required="">  </div>
		 
	</div>

	</div><!-- End Col Md-6 -->
	

</div> <!-- End Row -->



<div class="row"> <!-- 5TH Row -->		
	<div class="col-md-3">

		<div class="form-group">
			<h5>Newsevent Image<span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="file" name="image" class="form-control" id="image" >  
			</div>
		</div>

	</div> <!-- End Col md 4 --> 


	<div class="col-md-3">

		<div class="form-group">
			<div class="controls">
				<img id="showImage1" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

			</div>
		</div>
	
	</div> <!-- End Col md 4 --> 
	<div class="col-md-3">

		<div class="form-group">
			<h5>Notice File <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="file" name="file" class="form-control" id="file" >  
			</div>
		</div>

	</div> <!-- End Col md 4 --> 


	<div class="col-md-3">

		<div class="form-group">
			<div class="controls">
				<img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

			</div>
		</div>
	
	</div> <!-- End Col md 4 --> 

		
</div> <!-- End 5TH Row -->
<div class="row">
<div class="col-md-12">

	<div class="form-group">
		<h5>Description <span class="text-danger">*</span></h5>
			<div class="controls">
				<textarea name="description" id="description" rows="6" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">
				
				</textarea>
			</div>
	</div>

</div> 

</div>



	
	

</div> <!-- End Row -->

 
  
							 
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
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage1').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
    $(document).ready(function(){
		$('#file').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>


@endsection
