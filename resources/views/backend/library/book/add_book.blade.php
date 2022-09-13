@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

            <section class="content">

                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Add Book</h4>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('store.library.book') }}" enctype="multipart/form-data">
                                    @csrf
                                
            
                                    <div class="row">
                         <div class="col-md-12">
                                     
                                    <div class="form-group">
                                         <label>Book Title<small class="req"> *</small></label>
                                         <input id="book_title" name="book_title" placeholder="" type="text" class="form-control" value="">
                                         <span class="text-danger"></span>
                                     </div>
                                              </select>
                                     </div>
                                 </div> <!-- // end form group -->
                          <div class="row">
                                    <div class="col-md-6">
                                         
                                        <div class="form-group">
                                             <label>Book Number<small class="req"> *</small></label>
                                             <input id="book_no" name="book_no" placeholder="" type="number" class="form-control" value="">
                                             <span class="text-danger"></span>
                                         </div>
                                                  </select>
                                         </div>                   
                                     <div class="col-md-6">
                                             
                                            <div class="form-group">
                                                 <label>ISBN Number<small class="req"> *</small></label>
                                                 <input id="isbn_no" name="isbn_no" placeholder="" type="text" class="form-control" value="">
                                                 <span class="text-danger"></span>
                                             </div>
                                                      </select>
                                             </div>
                                         </div> <!-- // end form group -->
                                  <div class="row">
                                     <div class="col-md-6">
                                                 
                                                <div class="form-group">
                                                     <label>Publisher<small class="req"> *</small></label>
                                                     <input id="publish" name="publish" placeholder="" type="text" class="form-control" value="">
                                                     <span class="text-danger"></span>
                                                 </div>
                                                          </select>
                                                 </div>
                                            
                                      
                                         <div class="col-md-6">
                                                     
                                                    <div class="form-group">
                                                         <label>Author<small class="req"> *</small></label>
                                                         <input id="author" name="author" placeholder="" type="text" class="form-control" value="">
                                                         <span class="text-danger"></span>
                                                     </div>
                                                              </select>
                                                     </div>
                                                 </div> <!-- // end form group -->
                                          <div class="row">
                                             <div class="col-md-4">
                                                         
                                                        <div class="form-group">
                                                             <label>Subject<small class="req"> *</small></label>
                                       <input id="subject" name="subject" placeholder="" type="text" class="form-control" value="">
                                       <span class="text-danger"></span>
                                           </div>
                                                    
                                           </div>             
                                        <div class="col-md-4">
                                               
                                              <div class="form-group">
                                                   <label>Rack Number<small class="req"> *</small></label>
                                                   <input id="rack_no" name="rack_no" placeholder="" type="number" class="form-control" value="">
                                                   <span class="text-danger"></span>
                                               </div>
                                                        
                                               </div>
                                            <!-- // end form group -->
                      
                         <div class="col-md-4">
                                                   
                                                  <div class="form-group">
                                                       <label>Qty<small class="req"> *</small></label>
                                                       <input id="qty" name="qty" placeholder="" type="number" class="form-control" value="">
                                                       <span class="text-danger"></span>
                                                   </div>
                                                        
                                                   </div>
                                               </div> <!-- // end form group -->
                                         <div class="row">
                                                <div class="col-md-6">
                                                       
                                                      <div class="form-group">
                                                           <label>Book Price<small class="req"> *</small></label>
                                                           <input id="price" name="price" placeholder="" type="text" class="form-control" value="">
                                                           <span class="text-danger"></span>
                                                       </div>
                                                                </select>
                                                       </div>
                                                
                              
                                                    <div class="col-md-6">
                                                           
                                                          <div class="form-group">
                                                               <label>Post Date<small class="req"> *</small></label>
                                                               <input id="postdate" name="postdate" placeholder="" type="date" class="form-control" value="">
                                                               <span class="text-danger"></span>
                                                           </div>
                                                                    </select>
                                                           </div>
                                                       </div> <!-- // end form group -->
                                  <div class="row">
                                     <div class="col-md-12">
                                                               
                                                              <div class="form-group">
                                                                   <label>Description<small class="req"> *</small></label>
                                                                   <input id="description" name="description" placeholder="" type="text" class="form-control" value="">
                                                                   <span class="text-danger"></span>
                                                               </div>
                                                                        </select>
                                                               </div>
                                                           </div> <!-- // end form group -->
                                   

                                            </div><!-- End col-md-5 -->
                                        </div> <!-- end Row -->
                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Save">
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
