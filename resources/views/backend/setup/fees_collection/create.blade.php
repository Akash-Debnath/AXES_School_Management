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
			  <h4 class="box-title">Fees Collections Voucher</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	                <form method="post" action="{{ route('fees.feescollectionvoucher.store') }}">
	 	                @csrf
					  <div class="row">
						<div class="col-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Invoice No<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="invno" class="form-control" value="{{$col_track}}" readonly> 
                                            
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Date<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="date" class="form-control" >  
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Student<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="sid" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select One</option>
                                            @foreach($student as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach	 
                                            </select>
                                        </div>
                                    </div> <!-- // end form group -->


                                </div> <!-- End col-md-5 -->
                               

                            </div>
						    <div class="add_item">

                                <div class="row">

                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <h5>Fees Master<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="fees_master[]" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select One</option>
                                                @foreach($feesmaster as $master)
                                                <option value="{{ $master->id }}">{{ $master->name }}</option>
                                                @endforeach	 
                                                </select>
                                            </div>
                                        </div> <!-- // end form group -->


                                    </div> <!-- End col-md-5 -->

                                    <div class="col-md-3">
                                        
                                        <div class="form-group">
                                            <h5>Amount <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="amount[]" id='amount[]'class="form-control" onchange="show_cheque_date()" > 
                                            </div>		 
                                        </div>

                                    </div><!-- End col-md-5 -->
                                    <div class="col-md-2">
                                        
                                        <div class="form-group">
                                            <h5>Discount <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="discount[]" class="form-control" > 
                                            </div>		 
                                        </div>

                                    </div><!-- End col-md-5 -->

                                    <div class="col-md-2" style="padding-top: 25px;">
                                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>    		
                                    </div><!-- End col-md-5 -->
                                
                                </div> <!-- end Row -->
                                

                            </div>	<!-- // End add_item -->
                            <div class="row">
                                <div class="col-md-12">
                                        
                                    <div class="form-group">
                                        <h5>Total<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" id="total_count" name="total"  class="form-control">
                                        </div>		 
                                    </div>
    
                                </div><!-- End col-md-5 -->

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Note<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <textarea name="note" id="note" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">
                                                    
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


  <div style="visibility: hidden;">
  	<div class="whole_extra_item_add" id="whole_extra_item_add">
  		<div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">

                <div class="col-md-5">

                    <div class="form-group">
                        <h5>Fees Master<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="fees_master[]" required="" class="form-control">
                            <option value="" selected="" disabled="">Select One</option>
                            @foreach($feesmaster as $master)
                            <option value="{{ $master->id }}">{{ $master->name }}</option>
                            @endforeach	 
                            </select>
                        </div>
                    </div> <!-- // end form group -->


                </div> <!-- End col-md-5 -->

                <div class="col-md-3">
                    
                    <div class="form-group">
                        <h5>Amount <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="amount[]" id='amount[]'class="form-control" onchange="show_cheque_date()" > 
                        </div>		 
                    </div>

                </div><!-- End col-md-5 -->
                <div class="col-md-2">
                    
                    <div class="form-group">
                        <h5>Discount <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="discount[]" class="form-control" > 
                        </div>		 
                    </div>

                </div><!-- End col-md-5 -->
                <div class="col-md-2" style="padding-top: 25px;">
                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                    <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>    		
                </div><!-- End col-md-2 -->
            
            </div> <!-- end Row -->		
  		</div>  		
  	</div>  	
  </div>


 <script type="text/javascript">
 	$(document).ready(function(){
 		var counter = 0;
 		$(document).on("click",".addeventmore",function(){
 			var whole_extra_item_add = $('#whole_extra_item_add').html();
 			$(this).closest(".add_item").append(whole_extra_item_add);
 			counter++;
 		});
 		$(document).on("click",'.removeeventmore',function(event){
 			$(this).closest(".delete_whole_extra_item_add").remove();
 			counter -= 1
 		});

 	});

     $(function () {
       $("select").select2();
   });
 </script>

<script>
    // function show_cheque_date($id){
    //    var set_id= $id;
    //    $('#cheque_date'+set_id+"").show();
    // }
    // function get_total_amount($id){
    //    var set_id= $id;
    //   var initial_total = $('#total_count').val();
    //   var amount = $('#amount'+set_id+"").val();
    //   alert
    //   if(initial_total<1){
    //    $('#total_count').val(amount);
    //   }else{
    //      var set_initial_total = parseInt(initial_total) + parseInt(amount);
    //       $('#total_count').val(set_initial_total);
    //       $('#grand_total').val(set_initial_total);
    //   }
    // }
 </script>


@endsection
