@extends('admin.admin_master')
@section('admin')



 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Supplier</h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.inventory.itemsupplier') }}" enctype="multipart/form-data">
	 	@csrf
					  <div class="row">
						<div class="col-12">


						 		<div class="box-body">
									<div class="form-group">
									<input type="hidden" name="ci_csrf_token" value="">
										<label for=""> Name</label><small class="req"> *</small>
										<input autofocus="" id="name" name="item_supplier" placeholder="" type="text" class="form-control" value="" autocomplete="off">
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for=""> Phone</label>
										<input id="phone" name="phone" placeholder="" type="text" class="form-control" value="">
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for=""> Email</label>
										<input id="text" name="email" placeholder="" type="text" class="form-control" value="">
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for="">Address</label>
										<textarea class="form-control" id="address" name="address" placeholder="" rows="3"></textarea>
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for=""> Contact Person Name</label>
										<input id="contact_person_name" name="contact_person_name" placeholder="" type="text" class="form-control" value="">
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for="">Contact Person Phone</label>
										<input id="contact_person_phone" name="contact_person_phone" placeholder="" type="text" class="form-control" value="">
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for=""> Contact Person Email</label>
										<input id="contact_person_email" name="contact_person_email" placeholder="" type="email" class="form-control" value="">
										<span class="text-danger"></span>
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea class="form-control" id="description" name="description" placeholder="" rows="3"></textarea>
										<span class="text-danger"></span>
									</div>
								</div><!-- /.box-body -->
								<div class="box-footer">
                                    <input type="submit" class="btn btn-info pull-right" value="save">

								</div>
							</form>
                        </form>
                    </div>

                </div>					</form>

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
