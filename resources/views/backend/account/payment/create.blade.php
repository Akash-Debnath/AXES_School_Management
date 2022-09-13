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
			  <h4 class="box-title">Payment Voucher</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	                <form method="post" action="{{ route('account.paymentvoucher.store') }}">
	 	                @csrf
					  <div class="row">
						<div class="col-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Voucher No<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="voucher_no" class="form-control" value="{{$pay_track}}" readonly> 
                                            
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
                                        <h5>Note<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <textarea name="note" id="note" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">
                                                    
                                                </textarea>
                                            </div>
                                    </div>
                                </div>

                            </div>
						    <div class="add_item">

                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Payment Source <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="payment_source[]" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select One</option>
                                                <option value="LE_5">Cash</option>
                                                {{-- @foreach($classes as $class)
                                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach	  --}}
                                                </select>
                                            </div>
                                        </div> <!-- // end form group -->


                                    </div> <!-- End col-md-5 -->
                                    <div class="col-md-2">
                                        
                                        <div class="form-group">
                                            <h5>Balance <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <span>0.00</span>
                                            </div>		 
                                        </div>

                                    </div><!-- End col-md-5 -->

                                    <div class="col-md-3">
                                        
                                        <div class="form-group">
                                            <h5>Cheque No</h5>
                                            <div class="controls">
                                                <input type="text" name="cheque_no[]" class="form-control" > 
                                            </div>		 
                                        </div>

                                    </div><!-- End col-md-5 -->
                                    <div class="col-md-3">
                                        
                                        <div class="form-group">
                                            <h5>Cheque Date</h5>
                                            <div class="controls">
                                                <input type="date" name="cheque_date[]" id='cheque_date[]' class="form-control" > 
                                            </div>		 
                                        </div>

                                    </div><!-- End col-md-5 -->

                                </div> <!-- end Row -->
                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Payment To <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="payment_to[]" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Program</option>
                                                <option value="SU_1">Oli Ullah</option>
                                                {{-- @foreach($classes as $class)
                                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach	  --}}
                                                </select>
                                            </div>
                                        </div> <!-- // end form group -->


                                    </div> <!-- End col-md-5 -->
                                    <div class="col-md-2">
                                        
                                        <div class="form-group">
                                            <h5>Balance <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <span>0.00</span>
                                            </div>		 
                                        </div>

                                    </div><!-- End col-md-5 -->

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
                                            <h5>Ref. <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="ref[]" class="form-control" > 
                                            </div>		 
                                        </div>

                                    </div><!-- End col-md-5 -->

                                    <div class="col-md-1" style="padding-top: 25px;">
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

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Payment Source <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="payment_source[]" required="" class="form-control">
                            <option value="" selected="" disabled="">Select One</option>
                            <option value="LE_5">Cash</option>
                            {{-- @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                            @endforeach	  --}}
                            </select>
                        </div>
                    </div> <!-- // end form group -->


                </div> <!-- End col-md-5 -->
                <div class="col-md-2">
                    
                    <div class="form-group">
                        <h5>Balance <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <span>0.00</span>
                        </div>		 
                    </div>

                </div><!-- End col-md-5 -->

                <div class="col-md-3">
                    
                    <div class="form-group">
                        <h5>Cheque No</h5>
                        <div class="controls">
                            <input type="text" name="cheque_no[]" class="form-control" > 
                        </div>		 
                    </div>

                </div><!-- End col-md-5 -->
                <div class="col-md-3">
                    
                    <div class="form-group">
                        <h5>Cheque Date</h5>
                        <div class="controls">
                            <input type="text" name="cheque_date[]" class="form-control" > 
                        </div>		 
                    </div>

                </div><!-- End col-md-5 -->

            </div> <!-- end Row -->
            <div class="form-row">

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Payment To <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="payment_to[]" required="" class="form-control">
                            <option value="" selected="" disabled="">Select One</option>
                            <option value="SU_2" >Shuvo</option>
                            {{-- @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                            @endforeach	  --}}
                            </select>
                        </div>
                    </div> <!-- // end form group -->


                </div> <!-- End col-md-5 -->
                <div class="col-md-1">
                    
                    <div class="form-group">
                        <h5>Balance <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <span>0.00</span>
                        </div>		 
                    </div>

                </div><!-- End col-md-5 -->

                <div class="col-md-3">
                    
                    <div class="form-group">
                        <h5>Amount <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="amount[]" id='amount[]'class="form-control" > 
                        </div>		 
                    </div>

                </div><!-- End col-md-5 -->
                <div class="col-md-2">
                    
                    <div class="form-group">
                        <h5>Ref. <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="ref[]" class="form-control" > 
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
