@extends('admin.admin_master')

@section('admin')


<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->

 
    <section class="content">
   
<!-- Basic Forms -->
<div class="box">
  <div class="box-header with-border">
    <h4 class="box-title">Edit Slider</h4>

  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col"> 
            
     <form action="{{ route('slider.update',$sliders->id)  }}" method="POST" enctype="multipart/form-data">
          @csrf 
                @method('PUT')
   
   
   
                <div class="row"> <!-- 1st Row -->

                  <div class="col-md-12">
                      <div class="form-group">
                          <h5>Title <span class="text-danger">*</span></h5>
                          <div class="controls">
                                  <input type="text" name="title"  class="form-control" required="" value="{{ $sliders->title }}">
                          </div>
                      </div>
  
                      <div class="form-group">
                          <h5>Description <span class="text-danger">*</span></h5>
                          <div class="controls">
                                  <input type="text" name="description" value="{{ $sliders->description }}"class="form-control" required="" >
                          </div>
                      </div>
  
                  </div> <!-- End Col md 4 -->
  
          </div> <!-- End 1stRow -->   
   
          <div class="row"> <!-- 1st Row -->

            <div class="col-md-12">

                <div class="form-group">
                    <h5>Link<span class="text-danger">*</span></h5>
                    <div class="controls">
                            <input type="text" name="link" value="{{ $sliders->link }}" class="form-control" required="" >
                    </div>
                </div>
                
               
                {{-- <div class="form-group">
                    <h5>Detail<span class="text-danger">*</span></h5>
                    <div class="controls">
                            <input type="textarea" name="detail" value="{{ $bot->detail }}" class="form-control" required="" >
                            
                        </div>
                </div> --}}

             <!-- End Col md 4 -->
         </div>
         </div>
   
   
         <div class="row"> <!-- 5TH Row -->
          <div class="col-md-6">

              <div class="form-group">
                  <h5> Image<span class="text-danger">*</span></h5>
                  <div class="controls">
                      <input type="file" name="image" value="{{ $sliders->image }}" class="form-control" id="logo" >
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

                {{-- <input type="hidden" name="old_image" value="{{ $sliders->image }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Update Title Name</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $sliders->title }}">

          @error('title')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

   </div>
   <div class="form-group">
    <h5>Description <span class="text-danger">*</span></h5>
    <div class="controls">
            <input type="text" name="description" class="form-control" required="" >
    </div>
  </div>
  </form>
  </div>



<div class="row"> <!-- 1st Row -->

  <div class="col-md-12">

      <div class="form-group">
          <h5>Link<span class="text-danger">*</span></h5>
          <div class="controls">
                  <input type="text" name="link" class="form-control"  >
          </div>
      </div>

  </div> <!-- End Col md 4 -->
</div>



  <div class="form-group">
    <label for="exampleInputEmail1">Update Slider Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $sliders->image }}">

          @error('image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  

     <div class="form-group">
     <img src="{{ url('public/upload/slider/',$sliders->image) }}" style="width:400px; height:200px;" >

     </div>


     
  <button type="submit" class="btn btn-primary">Update Slider</button>


       </div>
     

    </div>
  </div> 
 


    </div>
  </div> 

    </div>
</div>
    @endsection --}}








































  </section>
























