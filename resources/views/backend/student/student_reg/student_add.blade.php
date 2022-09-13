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
			  <h4 class="box-title">Add Student </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.student.registration') }}" enctype="multipart/form-data">
	 	@csrf 
					  <div class="row">
						<div class="col-12">	
 

 	
 		<div class="row"> <!-- 1st Row -->
 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Student Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="name" class="form-control"  value="@if($student){{$student->firstname}} {{$student->lastname}}@endif"> 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->
 			
			 
 			

			 <div class="col-md-4">

 		 <div class="form-group">
		<h5>Gender <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="gender" id="gender"  class="form-control">
			<option value="" selected="" disabled="">Select Gender</option>
			<option value="Male" @if($student) @if($student->gender=='Male') Selected @endif @endif>Male</option>
			<option value="Female" @if($student) @if($student->gender=='Female') Selected @endif @endif>Female</option>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 

			 <div class="col-md-4">

 		 <div class="form-group">
		<h5>Religion <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="religion" id="religion"  class="form-control">
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
						<input type="text" name="mobile" class="form-control"  value="@if($student){{$student->phone}}@endif"> 
					</div>		 
				</div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Address <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="address" class="form-control"  > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->



			 <div class="col-md-4">

				<div class="form-group">
				<h5>Date of Birth <span class="text-danger">*</span></h5>
				<div class="controls">
				<input type="date" name="dob" class="form-control"  > 
				</div>		 
				</div>

   </div> <!-- End Col md 4 -->
 
 			
 		</div> <!-- End 2nd Row -->



<div class="row"> <!-- 3rd Row -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Email <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="email" name="email" class="form-control"  value="@if($student){{$student->email}}@endif"> 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->

	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Caste <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="caste" class="form-control"  > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 

			 
	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Discount <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="number" name="discount" class="form-control"  > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 3rd Row -->



<div class="row"> <!-- 4th Row -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Blood group <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="bloodgroup" class="form-control" value="@if($student){{$student->bloodgroup}}@endif" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Height <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="height" class="form-control"  > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Weight <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="weight" class="form-control"  > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 4th Row -->




		<div class="row"> <!-- 5TH Row -->


			<div class="col-md-4">

				<div class="form-group">
					<h5>Year <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="year_id"  class="form-control">
							<option value="" selected="" disabled="">Select Year</option>
							@foreach($years as $year)
							<option value="{{ $year->id }}">{{ $year->name }}</option>
							@endforeach
							
						</select>
					</div>		 
				</div>
	  
 			</div> <!-- End Col md 4 --> 



 			
 			<div class="col-md-4">

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
	  
 			</div> <!-- End Col md 4 --> 


			<div class="col-md-4">

				<div class="form-group">
					<h5>Group <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="group_id"  class="form-control">
							<option value="" selected="" disabled="">Select Group</option>
							@foreach($groups as $group)
							<option value="{{ $group->id }}">{{ $group->name }}</option>
							@endforeach
							
						</select>
					</div>		 
				</div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 4TH Row -->
		 <div class="row"> <!-- 5TH Row -->


			<div class="col-md-4">

				<div class="form-group">
					<h5>Faculty <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="faculty_id"  class="form-control">
							<option value="" selected="" disabled="">Select Faculty</option>
							@foreach($facultys as $faculty)
							<option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
							@endforeach
							
						</select>
					</div>		 
				</div>
	  
 			</div> <!-- End Col md 4 --> 



 			
 			<div class="col-md-4">

				<div class="form-group">
					<h5>Department <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="dept_id"   class="form-control">
							<option value="" selected="" disabled="">Select Department</option>
							@foreach($departments as $department)
							<option value="{{ $department->id }}"@if($student)@if($student->Department_name==$department->id) selected @endif @endif>{{ $department->name }}</option>
							@endforeach
							
						</select>
					</div>		 
				</div>
	  
 			</div> <!-- End Col md 4 --> 


			<div class="col-md-2">

				<div class="form-group">
					<h5>Semester <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="semester"    class="form-control">
							<option value="" selected="" disabled="">Select Semester</option>
							<option value="Spring" @if($student)@if($student->semseter==0) selected @endif @endif>Spring</option>
							<option value="Summer" @if($student)@if($student->semseter==1) selected @endif @endif>Summer</option>
							<option value="Fall" @if($student)@if($student->semseter==2) selected @endif @endif>Fall</option>
						
							
						</select>
					</div>		 
				</div>
	  
 			</div> <!-- End Col md 4 --> 
			 <div class="col-md-2">

				<div class="form-group">
					<h5>Batch <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="batch_id"    class="form-control">
							<option value="" selected="" disabled="">Select Batch</option>
							<option value="1" >1 th</option>
							{{-- @foreach($groups as $group)
							<option value="{{ $group->id }}">{{ $group->name }}</option>
							@endforeach --}}
							
						</select>
					</div>		 
				</div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 4TH Row -->




<div class="row"> <!-- 5TH Row -->


<div class="col-md-4">

 		 <div class="form-group">
		<h5>Shift <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="shift_id"   class="form-control">
			<option value="" selected="" disabled="">Select Shift</option>
			 @foreach($shifts as $shift)
			<option value="{{ $shift->id }}">{{ $shift->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 



 			
 		<div class="col-md-4">

 		<div class="form-group">
		<h5>Profile Image <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="file" name="image" class="form-control" id="image" >  </div>
	 </div>
	  
 			</div> <!-- End Col md 4 --> 


<div class="col-md-4">

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
 <input type="text" name="fname" value="@if($student){{$student->fname}}@endif" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 
<div class="col-md-4">

	  <div class="form-group">
	<h5>Father Phone<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="fphone" value="@if($student){{$student->fmobile}}@endif" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 


<div class="col-md-4">

	  <div class="form-group">
	<h5>Father Occupation<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="foccupation" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 

		 
	 </div> <!-- End 6th Row -->


<div class="row"> <!-- 7th Row -->


<div class="col-md-4">

	  <div class="form-group">
	<h5>Mother Name <span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="mname" value="@if($student){{$student->mname}}@endif" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 
<div class="col-md-4">

	  <div class="form-group">
	<h5>Mother Phone<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="mphone" value="@if($student){{$student->mmobile}}@endif" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 


<div class="col-md-4">

	  <div class="form-group">
	<h5>Mother Occupation<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="moccupation" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 

		 
	 </div> <!-- End 7th Row -->

<div class="row"> <!-- 8th Row -->


<div class="col-md-4">

	  <div class="form-group">
	<h5>Guardian Name <span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="gname" class="form-control"  value="@if($student){{$student->lgurdian}}@endif"> 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 
<div class="col-md-4">

	  <div class="form-group">
	<h5>Guardian Relation<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="grelation" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 


<div class="col-md-4">

	  <div class="form-group">
	<h5>Guardian Email<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="gemail" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 

		 
	 </div> <!-- End 8th Row -->

<div class="row"> <!-- 9th Row -->


<div class="col-md-4">

	  <div class="form-group">
	<h5>Guardian Phone<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="gphone" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 
<div class="col-md-4">

	  <div class="form-group">
	<h5>Guardian Occupation<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="goccupation" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 


<div class="col-md-4">

	  <div class="form-group">
	<h5>Guardian Address<span class="text-danger">*</span></h5>
	<div class="controls">
 <input type="text" name="gaddress" class="form-control"  > 
  </div>		 
  </div>
  
		 </div> <!-- End Col md 4 --> 

		 
	 </div> <!-- End 6th Row -->

	 
<div class="box-header with-border">
<h4 class="box-title">Present Address Information </h4>

</div>

	  

<div class="row"> <!-- 6th Row -->


<div class="col-md-6">

<div class="form-group">
<h5>House<span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="pre_house" value="@if($student){{$student->pre_house}}@endif" class="form-control"  > 
</div>		 
</div>

   </div> <!-- End Col md 4 --> 
<div class="col-md-6">

<div class="form-group">
<h5>Road<span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="pre_road" value="@if($student){{$student->pre_road}}@endif" class="form-control"  > 
</div>		 
</div>

   </div> <!-- End Col md 4 --> 


   
</div> <!-- End 6th Row -->
<div class="row"> <!-- 6th Row -->


	<div class="col-md-4">
	
	<div class="form-group">
	<h5>Post Office<span class="text-danger">*</span></h5>
	<div class="controls">
	<input type="text" name="pre_post_office" value="@if($student){{$student->pre_post_office}}@endif" class="form-control"  > 
	</div>		 
	</div>
	
	   </div> <!-- End Col md 4 --> 
	<div class="col-md-4">
	
	<div class="form-group">
	<h5>Thana<span class="text-danger">*</span></h5>
	<div class="controls">
	<input type="text" name="pre_police_station" value="@if($student){{$student->pre_police_station}}@endif" class="form-control"  > 
	</div>		 
	</div>
	
	   </div> <!-- End Col md 4 --> 
	
	
	<div class="col-md-4">
	
	<div class="form-group">
	<h5>District<span class="text-danger">*</span></h5>
	<div class="controls">
	<input type="text" name="pre_district" value="@if($student){{$student->pre_district}}@endif" class="form-control"  > 
	</div>		 
	</div>
	
	   </div> <!-- End Col md 4 --> 
	
	   
	</div> <!-- End 6th Row -->

	<div class="box-header with-border">
		<h4 class="box-title">Permament Address Information </h4>
		
		</div>
		
			  
		
		<div class="row"> <!-- 6th Row -->
		
		
		<div class="col-md-6">
		
		<div class="form-group">
		<h5>House<span class="text-danger">*</span></h5>
		<div class="controls">
		<input type="text" name="per_house" value="@if($student){{$student->per_house}}@endif" class="form-control"  > 
		</div>		 
		</div>
		
		   </div> <!-- End Col md 4 --> 
		<div class="col-md-6">
		
		<div class="form-group">
		<h5>Road<span class="text-danger">*</span></h5>
		<div class="controls">
		<input type="text" name="per_road" value="@if($student){{$student->per_road}}@endif" class="form-control"  > 
		</div>		 
		</div>
		
		   </div> <!-- End Col md 4 --> 
		
		
		   
		</div> <!-- End 6th Row -->
		<div class="row"> <!-- 6th Row -->
		
		
			<div class="col-md-4">
			
			<div class="form-group">
			<h5>Post Office<span class="text-danger">*</span></h5>
			<div class="controls">
			<input type="text" name="per_post_office" value="@if($student){{$student->per_post_office}}@endif" class="form-control"  > 
			</div>		 
			</div>
			
			   </div> <!-- End Col md 4 --> 
			<div class="col-md-4">
			
			<div class="form-group">
			<h5>Thana<span class="text-danger">*</span></h5>
			<div class="controls">
			<input type="text" name="per_police_station" value="@if($student){{$student->per_police_station}}@endif" class="form-control"  > 
			</div>		 
			</div>
			
			   </div> <!-- End Col md 4 --> 
			
			
			<div class="col-md-4">
			
			<div class="form-group">
			<h5>District<span class="text-danger">*</span></h5>
			<div class="controls">
			<input type="text" name="per_district" value="@if($student){{$student->per_district}}@endif" class="form-control"  > 
			</div>		 
			</div>
			
			   </div> <!-- End Col md 4 --> 
			
			   
			</div> <!-- End 6th Row -->
		


	 
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
				<input type="text" name="sscexamtitle" class="form-control" > 
			</div>		 
		</div>
		
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<h5>Concentration/Major/Group<span class="text-danger">*</span></h5>
			<div class="controls">
				<select name="sscgroup" class="form-control" >
					<option value="Science">Science</option>
					<option value="Commerce">Commerce</option>
					<option value="Arts">Arts</option>
				</select> 
			</div>		 
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<h5>Institute Name<span class="text-danger">*</span></h5>
			<div class="controls">
				<input name="sscinstitutename"  type="text" class="form-control" placeholder="Write Your Institute Name"  >
			</div>		 
		</div>
		
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<h5>Roll Number<span class="text-danger">*</span></h5>
			<div class="controls">
				<input name="sscroll" value="@if($student) {{$student->sscroll}}@endif" type="text" class="form-control"   >
			</div>		 
		</div>
		
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<h5>Reg. Number<span class="text-danger">*</span></h5>
			<div class="controls">
				<input name="sscregistration" value="@if($student) {{$student->sscregno}}@endif" type="text" class="form-control"  >
			</div>		 
		</div>
		
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<h5>Board<span class="text-danger">*</span></h5>
			<div class="controls">
				<select name="sscboard" class="form-control" id="Board" >
					@if($student)
					<option value="{{$student->sscboard}}" selected>{{$student->sscboard}}</option>
					@endif
					<option value="Khulna">Khulna</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Jessore">Jessore</option>
					<option value="Cummilla">Comilla</option>
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
						@if($student)
						<option value="{{$student->sscgrade}}" selected>{{$student->sscgrade}}</option>
						@endif
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
				<input name="sscgpa" type="text" class="form-control" value="" >
			</div>		 
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<h5>Scale<span class="text-danger">*</span></h5>
			<div class="controls">
				<input name="sscscale" type="text" class="form-control" value="" >
			</div>		 
		</div>
		
	</div>
	<div class="col-md-2">
		<label for="">Duration <sup style="color: red">*</sup></label>
		<input name="sscduration" type="text" class="form-control"  value="">
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<h5>Passing Year<span class="text-danger">*</span></h5>
			<div class="controls">
				<select class="form-control" name="sscpassingyear" >

					@if($student)
						<option value="{{$student->sscpassyear}}" selected>{{$student->sscpassyear}}</option>
					@endif
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
					<input type="text" name="hscexamtitle" class="form-control"  > 
				</div>		 
			</div>
			
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<h5>Concentration/Major/Group<span class="text-danger">*</span></h5>
				<div class="controls">
					<select name="hscgroup" class="form-control" >
						<option value="Science">Science</option>
						<option value="Commerce">Commerce</option>
						<option value="Arts">Arts</option>
					</select> 
				</div>		 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<h5>Institute Name<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="hscinstitutename"  type="text" class="form-control" placeholder="Write Your Institute Name"  >
				</div>		 
			</div>
			
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<h5>Roll Number<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="hscroll" value="@if($student) {{$student->hscroll}}@endif" type="text" class="form-control"   >
				</div>		 
			</div>
			
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<h5>Reg. Number<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="hscregistration" value="@if($student) {{$student->hscregno}}@endif" type="text" class="form-control"  >
				</div>		 
			</div>
			
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Board<span class="text-danger">*</span></h5>
				<div class="controls">
					<select name="hscboard" class="form-control" id="Board" >
						@if($student)
						<option value="{{$student->hscborad}}" selected>{{$student->hscborad}}</option>
						@endif
						<option value="Khulna">Khulna</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Jessore">Jessore</option>
						<option value="Cummilla">Comilla</option>
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
							@if($student)
							<option value="{{$student->hscgrade}}" selected>{{$student->hscgrade}}</option>
							@endif
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
					<input name="hscgpa" type="text" class="form-control"  >
				</div>		 
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Scale<span class="text-danger">*</span></h5>
				<div class="controls">
					<input name="hscscale" type="text" class="form-control" >
				</div>		 
			</div>
			
		</div>
		<div class="col-md-2">
			<label for="">Duration <sup style="color: red">*</sup></label>
			<input name="hscduration" type="text" class="form-control" >
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<h5>Passing Year<span class="text-danger">*</span></h5>
				<div class="controls">
					<select class="form-control" name="hscpassingyear" >
	
						@if($student)
							<option value="{{$student->hscpassyear}}" selected>{{$student->hscpassyear}}</option>
						@endif
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
						<input type="text" name="bscexamtitle" class="form-control"  value="@if($student) {{$student->bachelor_degree_name}}@endif"> 
					</div>		 
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<h5>Subject/Program/Department<span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="bscsubject" class="form-control"  > 
					</div>	 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<h5>Institute Name<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="bscinstitutename" type="text" class="form-control" placeholder="Write Your Institute Name" value="@if($student) {{$student->bachelor_degree_institute}}@endif" >
					</div>		 
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<h5>Roll/ID<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="bscroll" type="text" class="form-control"   value="@if($student) {{$student->bachelor_degree_roll}}@endif">
					</div>		 
				</div>
				
			</div>
			
		</div>
		<div class="row">
			
			<div class="col-md-2">
				<div class="form-group">
					<h5>CGPA<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="bscgpa" type="text" class="form-control" >
					</div>		 
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>Scale<span class="text-danger">*</span></h5>
					<div class="controls">
						<input name="bscscale" type="text" class="form-control"  >
					</div>		 
				</div>
				
			</div>
			<div class="col-md-2">
				<label for="">Duration <sup style="color: red">*</sup></label>
				<input name="bscduration" type="text" class="form-control"  >
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<h5>Passing Year<span class="text-danger">*</span></h5>
					<div class="controls">
						<select class="form-control" name="bscpassingyear" >
							<option value="">Select Year</option>
							@if($student)
							<option value="{{$student->bachelor_degree_passyear}}" selected>{{$student->bachelor_degree_passyear}}</option>
						    @endif
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
