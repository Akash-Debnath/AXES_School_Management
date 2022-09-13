@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

            <section class="content">

                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Add Course</h4>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('store.course') }}" enctype="multipart/form-data">
                                    @csrf
                                
            
                
            
                                        
                                                                    
                                        <div class="row">
                                
                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <h5>Course Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="name" class="form-control" > 
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div><!-- End col-md-5 -->
                                        </div> <!-- end Row -->

                                        <div class="row"> <!-- 1st Row -->

                                            <div class="col-md-8">
                                
                                                <div class="form-group">
                                                    <h5>Link <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                            <input type="text" name="link" class="form-control" required="" >
                                                    </div>
                                                </div>
                                
                                            </div> <!-- End Col md 4 -->
                                             <div class="col-md-4">
                                
                                                <div class="form-group">
                                                    <h5>Code<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                            <input type="varchar" name="code" class="form-control" required="" >
                                                    </div>
                                                </div>
                                
                                            </div>
                                            
                                         </div>
                                
                                
                                
                                            <div class="row"> <!-- 5TH Row -->
                                                    <div class="col-md-5">
                                
                                                        <div class="form-group">
                                                            <h5>Image<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="file" name="image" class="form-control" id="logo" >
                                                            </div>
                                                        </div>
                                
                                                    </div> <!-- End Col md 4 -->
                                
                                
                                                    <div class="col-md-5">
                                
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <img id="showImage1" src="{{ url('') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
                                
                                                            </div>
                                                        </div>
                                
                                                    </div> <!-- End Col md 4 -->
                                
                                
                                
                                            </div> <!-- End 5TH Row -->
                                             <div class="row"> <!-- 5TH Row -->
                                                    <div class="col-md-6">
                                
                                                        <div class="form-group">
                                                            <h5>Department Brochure<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="file" name="course_brochure" class="form-control"  >
                                                            </div>
                                                        </div>
                                
                                                    </div> <!-- End Col md 4 -->
                                                    <div class="col-md-6">
                                
                                                        <div class="form-group">
                                                            <h5>Duration<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="number" name="duration" class="form-control"  >
                                                            </div>
                                                        </div>
                                
                                                    </div> <!-- End Col md 4 -->
                                
                                
                                
                                            </div> <!-- End 5TH Row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                
                                                    <div class="form-group">
                                                        <h5>Description <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <textarea name="editor1"  aria-invalid="false">
                                
                                                                </textarea>
                                                                <script>
                                                                    CKEDITOR.replace( 'editor1' );
                                                            </script>
                                                            </div>
                                                    </div>
                                
                                
                                                </div>
                                
                                            </div>
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12">-->
                                
                                            <!--        <div class="form-group">-->
                                            <!--            <h5>Grading System <span class="text-danger">*</span></h5>-->
                                            <!--                <div class="controls">-->
                                            <!--                    <textarea name="grading_system" id="grading_system" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">-->
                                
                                            <!--                    </textarea>-->
                                            <!--                </div>-->
                                            <!--        </div>-->
                                
                                            <!--    </div>-->
                                
                                            <!--</div>-->
                                            
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12">-->
                                
                                            <!--        <div class="form-group">-->
                                            <!--            <h5>Course Curriculum<span class="text-danger">*</span></h5>-->
                                            <!--                <div class="controls">-->
                                            <!--                    <textarea name="course_curriculum" id="course_curriculum" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">-->
                                
                                            <!--                    </textarea>-->
                                            <!--                </div>-->
                                            <!--        </div>-->
                                
                                            <!--    </div>-->
                                
                                            <!--</div>-->
                                            
                                            <!-- <div class="row">-->
                                            <!--    <div class="col-md-12">-->
                                
                                            <!--        <div class="form-group">-->
                                            <!--            <h5>Fee Schedules<span class="text-danger">*</span></h5>-->
                                            <!--                <div class="controls">-->
                                            <!--                    <textarea name="fee_schedules" id="fee_schedules" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">-->
                                
                                            <!--                    </textarea>-->
                                            <!--                </div>-->
                                            <!--        </div>-->
                                
                                            <!--    </div>-->
                                
                                            <!--</div>-->
                                            <!-- <div class="row">-->
                                            <!--    <div class="col-md-12">-->
                                
                                            <!--        <div class="form-group">-->
                                            <!--            <h5>Semester Details<span class="text-danger">*</span></h5>-->
                                            <!--                <div class="controls">-->
                                            <!--                    <textarea name="semester_details" id="semester_details" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">-->
                                
                                            <!--                    </textarea>-->
                                            <!--                </div>-->
                                            <!--        </div>-->
                                
                                            <!--    </div>-->
                                
                                            <!--</div>-->
                                             <div class="row"> <!-- 5TH Row -->
                                                    <div class="col-md-6">
                                
                                                        <div class="form-group">
                                                            <h5>Eligibility<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="eligibility" class="form-control"  >
                                                            </div>
                                                        </div>
                                
                                                    </div> <!-- End Col md 4 -->
                                                    <div class="col-md-6">
                                
                                                        <div class="form-group">
                                                            <h5>Course Fee<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="number" name="course_fee" class="form-control"  >
                                                            </div>
                                                        </div>
                                
                                                    </div> <!-- End Col md 4 -->
                                
                                
                                
                                            </div> <!-- End 5TH Row -->
                                
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
