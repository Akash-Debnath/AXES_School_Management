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
              <h4 class="box-title">Gallery</h4>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col">

     <form method="post" action="{{ route('gallery.store') }}"enctype="multipart/form-data">
        @csrf
                      <div class="row">
                        <div class="col-12">



            <div class="row"> <!-- 1st Row -->

                <div class="col-md-6">

                    <div class="form-group">
                        <h5>Gallery Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                                <input type="text" name="title" class="form-control" required="" >
                        </div>
                    </div>

                </div> <!-- End Col md 4 -->
                 <div class="col-md-6">

                    <div class="form-group">
                        <h5>Type <span class="text-danger">*</span></h5>
                        <div class="controls">
                                	<select name="type" required="" class="form-control">
            							<option value="" selected="" disabled="">Select Type</option>
            							<option value="All">All</option>
            							<option value="Classes">Classes</option>
            							<option value="Sports">Sports</option>
            							<option value="Party">Party</option>
            							<option value="Contest">Contest</option>
            							<option value="Event">Event</option>
            							 
        							</select>
                        </div>
                    </div>

                </div> <!-- End Col md 4 -->


        </div> <!-- End 1stRow -->

         <div class="row"> <!-- 1st Row -->

            <div class="col-md-12">

                <div class="form-group">
                    <h5>Gallery Link <span class="text-danger">*</span></h5>
                    <div class="controls">
                            <input type="text" name="link" class="form-control" required="" >
                    </div>
                </div>

            </div> <!-- End Col md 4 -->
         </div>



            <div class="row"> <!-- 5TH Row -->
                    <div class="col-md-6">

                        <div class="form-group">
                            <h5>Gallery Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" class="form-control" id="logo" >
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
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <h5>Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea name="description" id="description" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">

                                </textarea>
                            </div>
                    </div>

                </div>
                    <!--<div class="col-md-6">-->
                    <!--    <div class="form-group">-->
                    <!--        <h5>TYPE <span class="text-danger">*</span></h5>-->
                    <!--            <div class="controls">-->
                    <!--                <input type ="type" id="type" class="form-control" required="" placeholder="Type" aria-invalid="false">-->
    
                                
                    <!--            </div>-->
                    <!--    </div>-->
    
                    <!--</div>-->
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
