@extends('admin.admin_master')
@section('admin')



 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Purpose</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('setupfrontoffice.add') }}" enctype="multipart/form-data">
	 	@csrf 
					  <div class="row">
						<div class="col-12">	
 
 


			 <div class="col-md-4">

				<div class="form-group">
				<h5> Purpose<span class="text-danger">*</span></h5>
				<div class="controls">
				<input type="text" name="name" class="form-control" required="" > 
				</div>		 
				</div>

              </div> 



            
             

			  <div class="col-md-4">
            
            	<div class="form-group">
            	<h5>Description<span class="text-danger">*</span></h5>
            	<div class="controls">
            	<input type="text" name="name" class="form-control" required="" > 
            	</div>		 
            	</div>
  
              </div>    




							 
						<div class="text-xs-right">
	 <input type="Submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection