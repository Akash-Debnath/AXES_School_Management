@extends('admin.admin_master')
@section('admin')



 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Item Store</h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.inventory.itemstore') }}" enctype="multipart/form-data">
	 	@csrf
					  <div class="row">
						<div class="col-12">


							 {{-- id="employeeform" name="employeeform" method="post" accept-charset="utf-8"> --}}
								<div class="box-body">
									<input type="hidden" name="ci_csrf_token" value="">                                <div class="form-group">
										<label for="exampleInputEmail1">Item Store Name</label><small class="req"> *</small>
										<input autofocus="" id="name" name="item_store" placeholder="" type="text" class="form-control" value="" autocomplete="off">
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Item Stock Code</label>
										<input id="code" name="code" placeholder="" type="text" class="form-control" value="">
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Description</label>
										<textarea class="form-control" id="description" name="description" placeholder="" rows="3"></textarea>
										<span class="text-danger"></span>
									</div>
								</div><!-- /.box-body -->
								<div class="box-footer">
                                    <input type="submit" class="btn btn-info pull-right" value="save">
								</div>


								</div>

							</div>
                        </form>
                    </div>

                </div>

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
