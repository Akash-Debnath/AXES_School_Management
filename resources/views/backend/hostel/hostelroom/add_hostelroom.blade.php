@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">	

        <section class="content">           
            <div class="box">
                    <div class="box-header with-border">
                    <h4 class="box-title">Add Hostel Room</h4>
                    </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col">
      
                            <form method="post" action="{{ route('store.hostelroom') }}" enctype="multipart/form-data">
                                    @csrf                                                                    
                                        <div class="row">
                        
                                                <div class="col-md-6">
                                                  
                                                    <div class="form-group">
                                                        <label>Room Number / Name<small class="req"> *</small></label>
                                                        <input id="room_no" name="room_no" placeholder="" type="text" class="form-control" value="">
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                                            
                                                <div class="col-md-6">
                                              
                                                    <div class="form-group">
                                                      <h5>Hostel<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                               <select name="hostel_name" required="" class="form-control">
                                                               <option value="" selected="" disabled="">Select</option>
                                                               <option value="East">East</option>
                                                               <option value="West">West</option>
                                                               <option value="West">South</option>	
                                                               <option value="West">North</option> 
                                                               </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> <!-- // end form group -->
                                        <div class="row">
                    
                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <h5>Room Type<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="room_type" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select</option>
                                                        <option value="Single Bed">Single Bed</option>
                                                        <option value="Double Bed">Double Bed</option>
                                                        <option value="Three Bed">Three Bed</option>	 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                        
                                            <div class="col-md-6">
                                                    
                                                <div class="form-group">
                                                    <label>Number Of Bed <small class="req"> *</small></label>
                                                    <input id="name" name="no_of_bed" placeholder="" type="text" class="form-control" value="">
                                                    <span class="text-danger"></span>
                                                </div>
            
                                            </div>
                                        </div> <!-- // end form group -->
                                       <div class="row">
                  
                                           <div class="col-md-6">
                                                  
                                                <div class="form-group">
                                                  <label>Cost Per Bed <small class="req"> *</small></label>
                                                  <input id="cost_per_bed" name="cost_per_bed" placeholder="" type="text" class="form-control" value="">
                                                  <span class="text-danger"></span>
                                                </div>
                                                      </select>        
                                           </div>
                                            
                  
                  
                                           <div class="col-md-6">
                                                  
                                                <div class="form-group">
                                                   <label>Description<small class="req"> *</small></label>
                                                   <input id="description" name="description" placeholder="" type="text" class="form-control" value="">
                                                   <span class="text-danger"></span>
                                                </div>
                                           </div>
                                       </div> <!-- // end form group -->
                  
                  
                                    </div>
                                </div> <!-- end Row -->
                                
                                                    <div class="text-xs-right">
                                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                                    </div>
                    </form>
                

                </div>
            </div>
        </section>
 	  
	</div>
</div>


@endsection
