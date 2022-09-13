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
			  <h4 class="box-title">Add Teacher </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.teacher.registration') }}" enctype="multipart/form-data">
	 	@csrf 
					  <div class="row">
						<div class="col-12">	
 

 	
 		<div class="row"> <!-- 1st Row -->
 			
 			<div class="col-md-4">

				<div class="form-group">
				<h5>Teacher Name <span class="text-danger">*</span></h5>
				<div class="controls">
				<input type="text" name="name" class="form-control" required="" > 
	 			 </div>		 
	 		   </div>

 			</div> <!-- End Col md 4 -->
 			
			 
 			

			 <div class="col-md-4">

 		 <div class="form-group">
		<h5>Gender <span class="text-danger">*</span></h5>
		<div class="controls">
			<select name="gender" id="gender" required="" class="form-control">
					<option value="" selected="" disabled="">Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					
				</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 

			 <div class="col-md-4">

 		 <div class="form-group">
		<h5>Religion <span class="text-danger">*</span></h5>
		<div class="controls">
	 		<select name="religion" id="religion" required="" class="form-control">
			<option value="" selected="" disabled="">Select Religion</option>
			<option value="Islam">Islam</option>
			<option value="Hindu">Hindu</option>
			<option value="Christan">Christan</option>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div>

 
 
 			
 		</div> <!-- End 1stRow -->






	<div class="row"> <!-- 2nd Row -->
 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Mobile Number <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="mobile" class="form-control" required="" > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Address <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="address" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->



			 <div class="col-md-4">

				<div class="form-group">
				<h5>Date of Birth <span class="text-danger">*</span></h5>
				<div class="controls">
				<input type="date" name="dob" class="form-control" required="" > 
				</div>		 
				</div>

   </div> <!-- End Col md 4 -->
 
 			
 		</div> <!-- End 2nd Row -->



<div class="row"> <!-- 3rd Row -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Email <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="email" name="email" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->

	<div class="col-md-4">

 		 <div class="form-group">
		<h5>NID <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="nid" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 

			 
	<div class="col-md-4">

 		 <div class="form-group">
			<h5>Blood group<span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="blgroup" class="form-control" required="" > 
			</div>		 
	 	 </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 3rd Row -->



<div class="row"> <!-- 4th Row -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Designation <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="designation" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 	</div> <!-- End Col md 4 --> 
			<div class="col-md-4">

				<div class="form-group">
					<h5>Height <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="height" class="form-control" required="" > 
					</div>		 
				</div>
			
			</div> <!-- End Col md 4 --> 


		<div class="col-md-4">

			<div class="form-group">
				<h5>Weight <span class="text-danger">*</span></h5>
				<div class="controls">
				<input type="text" name="weight" class="form-control" required="" > 
			</div>		 
	  	</div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 4th Row -->




		<div class="row"> <!-- 5TH Row -->
			<div class="col-md-4">

				<div class="form-group">
					<h5>Department <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="dept_id"  required="" class="form-control">
							<option value="" selected="" disabled="">Select Department</option>
							@foreach($departments as $department)
							<option value="{{ $department->id }}">{{ $department->name }}</option>
							@endforeach
							
						</select>
					</div>		 
				</div>
	  
 			</div> <!-- End Col md 4 --> 


			<!--<div class="col-md-4">-->

			<!--	<div class="form-group">-->
			<!--		<h5>Year <span class="text-danger">*</span></h5>-->
			<!--		<div class="controls">-->
			<!--			<select name="year_id" required="" class="form-control">-->
			<!--				<option value="" selected="" disabled="">Select Year</option>-->
			<!--				{{-- @foreach($years as $year)-->
			<!--				<option value="{{ $year->id }}">{{ $year->name }}</option>-->
			<!--				@endforeach --}}-->
							
			<!--			</select>-->
			<!--		</div>		 -->
			<!--	</div>-->
	  
 		<!--	</div>-->



 			
 			{{-- <div class="col-md-4">

				<div class="form-group">
					<h5>Class <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="class_id"  class="form-control">
							<option value="" selected="" disabled="">Select Class</option>
							@foreach($classes as $class)
							<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
							
						</select>
					</div>		 
				</div>
	  
 			</div> <!-- End Col md 4 -->  --}}
 			
 			


			<!--<div class="col-md-4">-->

			<!--	<div class="form-group">-->
			<!--		<h5>Group <span class="text-danger">*</span></h5>-->
			<!--		<div class="controls">-->
			<!--			<select name="group_id"  class="form-control">-->
			<!--				<option value="" selected="" disabled="">Select Group</option>-->
			<!--				{{-- @foreach($groups as $group)-->
			<!--				<option value="{{ $group->id }}">{{ $group->name }}</option>-->
			<!--				@endforeach --}}-->
							
			<!--			</select>-->
			<!--		</div>		 -->
			<!--	</div>-->
	  
 		<!--	</div> -->
 		
 			<div class="col-md-4">
        
        		<div class="form-group">
        			<h5>Faculty <span class="text-danger">*</span></h5>
        			<div class="controls">
        				<select name="faculty_id" required="" class="form-control">
        					<option value="" selected="" disabled="">Select Faculty</option>
        					@foreach($facultys as $faculty)
        					<option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
        					@endforeach
        					
        				</select>
        			</div>		 
        		</div>
        
        	 </div> <!-- End Col md 4 --> 

 
 			
 		</div> <!-- End 4TH Row -->




<div class="row"> <!-- 5TH Row -->






 			
 		<div class="col-md-6">

 		<div class="form-group">
		<h5>Profile Image <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="file" name="image" class="form-control" id="image" >  </div>
	 </div>
	  
 			</div> <!-- End Col md 4 --> 


    <div class="col-md-6">

 		<div class="form-group">
			<div class="controls">
			<img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

			</div>
	    </div>
	  
   </div> <!-- End Col md 4 --> 
 
 			
</div> <!-- End 5TH Row -->


	<div class="box-header with-border">
		<h4 class="box-title">Parent Information </h4>

	</div>

			

	<div class="row"> <!-- 6th Row -->


			<div class="col-md-4">

					<div class="form-group">
						<h5>Father Name <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="fname" class="form-control" required="" > 
						</div>		 
					</div>
			
			</div> <!-- End Col md 4 --> 
			<div class="col-md-4">

				<div class="form-group">
					<h5>Father Phone<span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="fphone" class="form-control" required="" > 
					</div>		 
				</div>
			
			</div> <!-- End Col md 4 --> 


			<div class="col-md-4">

				<div class="form-group">
					<h5>Father Occupation<span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="foccupation" class="form-control" required="" > 
					</div>		 
				</div>
			
			</div> <!-- End Col md 4 --> 

		 
	</div> <!-- End 6th Row -->


	<div class="row"> <!-- 7th Row -->


		<div class="col-md-4">

			<div class="form-group">
				<h5>Mother Name <span class="text-danger">*</span></h5>
				<div class="controls">
				<input type="text" name="mname" class="form-control" required="" > 
				</div>		 
			</div>
		
		</div> <!-- End Col md 4 --> 
		<div class="col-md-4">

			<div class="form-group">
				<h5>Mother Phone<span class="text-danger">*</span></h5>
				<div class="controls">
					<input type="text" name="mphone" class="form-control" required="" > 
				</div>		 
			</div>
		
		</div> <!-- End Col md 4 --> 


		<div class="col-md-4">

			<div class="form-group">
				<h5>Mother Occupation<span class="text-danger">*</span></h5>
				<div class="controls">
					<input type="text" name="moccupation" class="form-control" required="" > 
				</div>		 
			</div>
		
		</div> <!-- End Col md 4 --> 

			
	</div> <!-- End 7th Row -->

	<div class="row"> <!-- 8th Row -->


		<div class="col-md-4">

			<div class="form-group">
				<h5>Guardian Name <span class="text-danger">*</span></h5>
				<div class="controls">
					<input type="text" name="gname" class="form-control" required="" > 
				</div>		 
			</div>
		
		</div> <!-- End Col md 4 --> 
		<div class="col-md-4">

			<div class="form-group">
				<h5>Guardian Relation<span class="text-danger">*</span></h5>
				<div class="controls">
					<input type="text" name="grelation" class="form-control" required="" > 
				</div>		 
			</div>
		
		</div> <!-- End Col md 4 --> 


		<div class="col-md-4">

			<div class="form-group">
				<h5>Guardian Email<span class="text-danger">*</span></h5>
				<div class="controls">
					<input type="text" name="gemail" class="form-control" required="" > 
				</div>		 
			</div>
		
		</div> <!-- End Col md 4 --> 

			
	</div> <!-- End 8th Row -->

	{{-- SSC Info Start --}}
	<div class="box-header with-border">
		
			<div class="form-check">
			<input class="form-check-input" type="checkbox"  id="myCheck" onclick="myFunction()" >
			<label class="form-check-label" for="myCheck">
				<h4 class="box-title">Secondary Educational Information </h4>
			</label>
		  </div>
		
	</div>
	<br>
	

	<script>
		function myFunction() {
		  var checkBox = document.getElementById("myCheck");
		  var text = document.getElementById("ssc");
		  if (checkBox.checked == true){
			text.style.display = "block";
		  } else {
			 text.style.display = "none";
		  }
		}
	</script>
<div id="ssc" style="display:none">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<h5>Exam/Degree Title<span class="text-danger">*</span></h5>
				<div class="controls">
					<input type="text" name="ssc_exam" class="form-control"  > 
				</div>		 
			</div>
			
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<h5>Concentration/Major/Group<span class="text-danger">*</span></h5>
				<div class="controls">
					<select name="sscsub" class="form-control" >
						<option value="Science">Science</option>
						<option value="Commerce">Commerce</option>
						<option value="Arts">Arts</option>
					</select> 
				</div>		 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div class="form-group">
				<h5>Institute Name<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="sscinstitutename" type="text" class="form-control" placeholder="Write Your Institute Name" >
				</div>		 
			</div>
			
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Board<span class="text-danger">*</span></h5>
				<div class="controls">
					<select name="sscboard" class="form-control" id="Board">
						<option value="Dhaka">Dhaka</option>
						<option value="Khulna" selected>Khulna</option>
						<option value="Jessore">Jessore</option>
						<option value="Cummilla">Cummilla</option>
						<option value="CTG">CTG</option>
						<option value="Barisal">BARISAL</option>
						<option value="Cummilla">Cummilla</option>
					</select>
				</div>		 
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<h5>Letter Grade<span class="text-danger">*</span></h5>
				<div class="controls">
						<select class="form-control" name="ssclettergrade" >
							<option value="">Select grade</option>
							<option value="A+">A+</option>
							<option value="A">A</option>
							<option value="A-">A-</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="F">F</option>
			
						</select>
				</div>		 
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>GPA<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="sscgpa" type="text" class="form-control" required>
				</div>		 
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Scale<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="sscscale" type="text" class="form-control"  >
				</div>		 
			</div>
			
		</div>
		<div class="col-md-2">
			<label for="">Duration <sup style="color: red">*</sup></label>
			<input name="sscduration" type="text" class="form-control"  >
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Passing Year<span class="text-danger">*</span></h5>
				<div class="controls">
					<select class="form-control" name="sscpassingyear" >
						<option value="">Select Year</option>
						<option value="2022">2022</option>
						<option value="2021">2021</option>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015"> 2015</option>
						<option value="2014"> 2014</option>
						<option value="2013"> 2013</option>
						<option value="2012"> 2012</option>
						<option value="2011"> 2011</option>
						<option value="2010"> 2010</option>
						<option value="2009"> 2009</option>
						<option value="2008"> 2008</option>
						<option value="2007"> 2007</option>
						<option value="2006"> 2006</option>
						<option value="2005"> 2005</option>
						<option value="2004"> 2004</option>
						<option value="2003"> 2003</option>
						<option value="2002"> 2002</option>
						<option value="2001"> 2001</option>
						<option value="2000"> 2000</option>
		
					</select>
					
				</div>		 
			</div>
			
			
		</div>
	</div>
</div>
	{{-- SSC Info End --}}



	{{-- HSC Info Start --}}
	<div class="box-header with-border">
		
		<div class="form-check">
		<input class="form-check-input" type="checkbox"  id="myCheckhsc" onclick="myFunctionhsc()" >
		<label class="form-check-label" for="myCheckhsc">
			<h4 class="box-title">Higher Educational Information</h4>
		</label>
	  </div>
	
</div>
<br>


<script>
	function myFunctionhsc() {
	  var checkBox = document.getElementById("myCheckhsc");
	  var text = document.getElementById("hsc");
	  if (checkBox.checked == true){
		text.style.display = "block";
	  } else {
		 text.style.display = "none";
	  }
	}
</script>
<div id="hsc" style="display: none;">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<h5>Exam/Degree Title<span class="text-danger">*</span></h5>
				<div class="controls">
					<input type="text" name="hsc_exam" class="form-control" > 
				</div>		 
			</div>
			
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<h5>Concentration/Major/Group<span class="text-danger">*</span></h5>
				<div class="controls">
					<select name="hscsub" class="form-control" >
						<option value="Science">Science</option>
						<option value="Commerce">Commerce</option>
						<option value="Arts">Arts</option>
					</select> 
				</div>		 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div class="form-group">
				<h5>Institute Name<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="hscinstitutename" type="text" class="form-control" placeholder="Write Your Institute Name"  >
				</div>		 
			</div>
			
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Board<span class="text-danger">*</span></h5>
				<div class="controls">
					<select name="hscboard" class="form-control" id="Board" >
						<option value="Dhaka">Dhaka</option>
						<option value="Khulna" selected>Khulna</option>
						<option value="Jessore">Jessore</option>
						<option value="Cummilla">Cummilla</option>
						<option value="CTG">CTG</option>
						<option value="Barisal">BARISAL</option>
						<option value="Cummilla">Cummilla</option>
					</select>
				</div>		 
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<h5>Letter Grade<span class="text-danger">*</span></h5>
				<div class="controls">
						<select class="form-control" name="hsclettergrade" >
							<option value="">Select grade</option>
							<option value="A+">A+</option>
							<option value="A">A</option>
							<option value="A-">A-</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="F">F</option>
			
						</select>
				</div>		 
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>GPA<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="hscgpa" type="text" class="form-control" >
				</div>		 
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Scale<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="hscscale" type="text" class="form-control"  >
				</div>		 
			</div>
			
		</div>
		<div class="col-md-2">
			<label for="">Duration <sup style="color: red">*</sup></label>
			<input name="hscduration" type="text" class="form-control"  >
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Passing Year<span class="text-danger">*</span></h5>
				<div class="controls">
					<select class="form-control" name="hscpassingyear" >
						<option value="">Select Year</option>
						<option value="2022">2022</option>
						<option value="2021">2021</option>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015"> 2015</option>
						<option value="2014"> 2014</option>
						<option value="2013"> 2013</option>
						<option value="2012"> 2012</option>
						<option value="2011"> 2011</option>
						<option value="2010"> 2010</option>
						<option value="2009"> 2009</option>
						<option value="2008"> 2008</option>
						<option value="2007"> 2007</option>
						<option value="2006"> 2006</option>
						<option value="2005"> 2005</option>
						<option value="2004"> 2004</option>
						<option value="2003"> 2003</option>
						<option value="2002"> 2002</option>
						<option value="2001"> 2001</option>
						<option value="2000"> 2000</option>
		
					</select>
					
				</div>		 
			</div>
			
			
		</div>
	</div>

</div>

	
	{{-- HSC Info End --}}

		{{-- BSC Info Start --}}
		<div class="box-header with-border">
		
			<div class="form-check">
			<input class="form-check-input" type="checkbox"  id="myCheckbsc" onclick="myFunctionbsc()" >
			<label class="form-check-label" for="myCheckbsc">
				<h4 class="box-title">Bachelor Educational Information</h4>
			</label>
		  </div>
		
	</div>
	<br>
	
	
	<script>
		function myFunctionbsc() {
		  var checkBox = document.getElementById("myCheckbsc");
		  var text = document.getElementById("bsc");
		  if (checkBox.checked == true){
			text.style.display = "block";
		  } else {
			 text.style.display = "none";
		  }
		}
	</script>
	<div id="bsc" style="display: none;">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<h5>Exam/Degree Title<span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="bsc_exam" class="form-control" > 
					</div>		 
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<h5>Concentration/Major/Group<span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="bscsub" class="form-control" >
							<option value="Science">Science</option>
							<option value="Commerce">Commerce</option>
							<option value="Arts">Arts</option>
						</select> 
					</div>		 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10">
				<div class="form-group">
					<h5>Institute Name<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="bscinstitutename" type="text" class="form-control" placeholder="Write Your Institute Name"  >
					</div>		 
				</div>
				
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>Board<span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="bscboard" class="form-control" id="Board" >
							<option value="Dhaka">Dhaka</option>
							<option value="Khulna" selected>Khulna</option>
							<option value="Jessore">Jessore</option>
							<option value="Cummilla">Cummilla</option>
							<option value="CTG">CTG</option>
							<option value="Barisal">BARISAL</option>
							<option value="Cummilla">Cummilla</option>
						</select>
					</div>		 
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<h5>Letter Grade<span class="text-danger">*</span></h5>
					<div class="controls">
							<select class="form-control" name="bsclettergrade">
								<option value="">Select grade</option>
								<option value="A+">A+</option>
								<option value="A">A</option>
								<option value="A-">A-</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="F">F</option>
				
							</select>
					</div>		 
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>GPA<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="bscgpa" type="text" class="form-control">
					</div>		 
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>Scale<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="bscscale" type="text" class="form-control" >
					</div>		 
				</div>
				
			</div>
			<div class="col-md-2">
				<label for="">Duration <sup style="color: red">*</sup></label>
				<input name="bscduration" type="text" class="form-control" >
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>Passing Year<span class="text-danger">*</span></h5>
					<div class="controls">
						<select class="form-control" name="bscpassingyear" >
							<option value="">Select Year</option>
							<option value="2022">2022</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015"> 2015</option>
							<option value="2014"> 2014</option>
							<option value="2013"> 2013</option>
							<option value="2012"> 2012</option>
							<option value="2011"> 2011</option>
							<option value="2010"> 2010</option>
							<option value="2009"> 2009</option>
							<option value="2008"> 2008</option>
							<option value="2007"> 2007</option>
							<option value="2006"> 2006</option>
							<option value="2005"> 2005</option>
							<option value="2004"> 2004</option>
							<option value="2003"> 2003</option>
							<option value="2002"> 2002</option>
							<option value="2001"> 2001</option>
							<option value="2000"> 2000</option>
			
						</select>
						
					</div>		 
				</div>
				
				
			</div>
		</div>
	</div>
		{{-- BSC Info End --}}

		{{-- MSC Info Start --}}
		<div class="box-header with-border">
		
			<div class="form-check">
			<input class="form-check-input" type="checkbox"  id="myCheckmsc" onclick="myFunctionmsc()" >
			<label class="form-check-label" for="myCheckmsc">
				<h4 class="box-title">Masters Educational Information</h4>
			</label>
		  </div>
		
	</div>
	<br>
	
	
	<script>
		function myFunctionmsc() {
		  var checkBox = document.getElementById("myCheckmsc");
		  var text = document.getElementById("msc");
		  if (checkBox.checked == true){
			text.style.display = "block";
		  } else {
			 text.style.display = "none";
		  }
		}
	</script>
	<div id="msc" style="display: none;">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<h5>Exam/Degree Title<span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="msc_exam" class="form-control" > 
					</div>		 
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<h5>Concentration/Major/Group<span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="mscsub" class="form-control">
							<option value="Science">Science</option>
							<option value="Commerce">Commerce</option>
							<option value="Arts">Arts</option>
						</select> 
					</div>		 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10">
				<div class="form-group">
					<h5>Institute Name<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="mscinstitutename" type="text" class="form-control" placeholder="Write Your Institute Name" >
					</div>		 
				</div>
				
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>Board<span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="mscboard" class="form-control" id="Board">
							<option value="Dhaka">Dhaka</option>
							<option value="Khulna" selected>Khulna</option>
							<option value="Jessore">Jessore</option>
							<option value="Cummilla">Cummilla</option>
							<option value="CTG">CTG</option>
							<option value="Barisal">BARISAL</option>
							<option value="Cummilla">Cummilla</option>
						</select>
					</div>		 
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<h5>Letter Grade<span class="text-danger">*</span></h5>
					<div class="controls">
							<select class="form-control" name="msclettergrade">
								<option value="">Select grade</option>
								<option value="A+">A+</option>
								<option value="A">A</option>
								<option value="A-">A-</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="F">F</option>
				
							</select>
					</div>		 
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>GPA<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="mscgpa" type="text" class="form-control">
					</div>		 
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>Scale<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="mscscale" type="text" class="form-control" >
					</div>		 
				</div>
				
			</div>
			<div class="col-md-2">
				<label for="">Duration <sup style="color: red">*</sup></label>
				<input name="mscduration" type="text" class="form-control" >
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>Passing Year<span class="text-danger">*</span></h5>
					<div class="controls">
						<select class="form-control" name="mscpassingyear">
							<option value="">Select Year</option>
							<option value="2022">2022</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015"> 2015</option>
							<option value="2014"> 2014</option>
							<option value="2013"> 2013</option>
							<option value="2012"> 2012</option>
							<option value="2011"> 2011</option>
							<option value="2010"> 2010</option>
							<option value="2009"> 2009</option>
							<option value="2008"> 2008</option>
							<option value="2007"> 2007</option>
							<option value="2006"> 2006</option>
							<option value="2005"> 2005</option>
							<option value="2004"> 2004</option>
							<option value="2003"> 2003</option>
							<option value="2002"> 2002</option>
							<option value="2001"> 2001</option>
							<option value="2000"> 2000</option>
			
						</select>
						
					</div>		 
				</div>
				
				
			</div>
		</div>
	</div>
		{{-- MSC Info End --}}
	



 
  
							 
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
