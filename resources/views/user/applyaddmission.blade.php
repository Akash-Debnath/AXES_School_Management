<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>RMU University Management</title>

    <!-- CSS -->
   <link href="{{ asset('public/themefronted/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/magnific-popup/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/iconmoon/css/iconmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body >

    

    <!-- ==============================================
    * Apply Online *
    =================================================== -->
    
    
    <section class="login-wrapper register">


        
        <div class="inner">
            <div class="register-inner">
                <div class="login-logo"> <a href="index.html"><img src="{{ asset('public/themefronted/images/login-logo.png')}}" class="img-responsive" alt=""></a> </div>
                <div class="head-block">
                    <h1>Apply Now</h1>
                </div>
                <div class="cnt-block">
				 <form  method="POST" action="{{ route('infostore') }}" class="form-outer">
                    @csrf    
                        <h6>Please Fillup the form  you want to Enroll </h6>
                       
                       <br>
                       <br>
                       
                        
                     
                        
                        
                        
               
           
                <div class="row"> 
                   
                      
                     <div class="form-group col-md-3">
                        <span style="font-size: 18px;">Application for Admission*</span><br>
                           <input type="radio" id="spring (jan-apr)" name="applicantion_for" value="Spring (Jan-Apr)"style="height:14px; width:14px; vertical-align: right;>
                           <label for="spring (jan-apr)">Spring (Jan-Apr)</label><br>
                           <input type="radio" id="summer (may-aug)" name="applicantion_for" value="Summer (May-Aug)"style="height:14px; width:14px; vertical-align: right;>
                           <label for="summer (may-aug)">Summer (May-Aug)</label><br>
                           <input type="radio" id="fall (sep-dec)" name="applicantion_for" value="Fall (Sep-Dec)"style="height:14px; width:14px; vertical-align: right;>
                           <label for="fall (sep-dec)">Fall (Sep-Dec)</label>
                           </div>
                       
                         
                               <div class="col-md-3">
                                   <span style="font-size: 18px;">Applying Level*</span><br>
           
                                   <select name="degree" class="form-control">
                                       <option value="" selected="" disabled="">--Select Level--</option>
                                       <option value="bachelor">Bachelor</option>
                                       <option value="master">Masters</option>
                                   </select>
           
                               </div>
           
                               <div class="col-md-3">
                                   <span style="font-size: 18px;">Campus*</span>
           
                                   <select name="campus" class="form-control" id="campusSelector">
                                       <option value="" selected="" disabled="">--Select Campus--</option>
                                       <option value="City">City</option>
                                       <option value="Permanent">Permanent</option>
                                   </select>
           
                                   <div class="form-group campustype" style="display:none" id="City">
           
                                       <p><i class="fa fa-map-pin fa-fw text-primary"></i> <span style="opacity: 0.5"> 220/D, Begum Rokeya Sarani Dhaka- 1207, Bangladesh.</span></p>
           
                                   </div>
                                   <div class="form-group  campustype" style="display:none" id="Permanent">
                                       <p><i class="fa fa-map-pin fa-fw text-primary"></i> <span style="opacity: 0.5"> Purbachal American City, Charpara, Kanchan, Rupganj, Narayanganj</span></p>
           
                                   </div>
                               </div>
                               
           
                               <div class=" col-md-3">
                                   <span style="font-size: 18px;">Desired Program*</span><br>
           
                                   <select name="program" class="form-control" required="">
           
                                    @foreach($programs as $program )
                                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                                    @endforeach	
                                   </select>
           
                               </div>
                           
                       </div>
                       <hr>

                       <span style="font-size: 25px;">Personal Details</span>
                       <hr>
       
                       <div class="row">
                           <div class="col-md-4">
                               <input type="text" class="form-control input-sm" name="name" placeholder="Applicant Name *" required="">
                           </div>
                           <div class="form-group col-lg-4">
                               <input type="text" class="form-control" name="fname" placeholder="Father's Name *" required="">
                           </div>
                           <div class="form-group col-lg-4">
                               <input type="text" class="form-control" name="fmobile" placeholder="Father's Mobile Number *" required="">
                           </div>
                       </div>
       
                       <div class="row">
                           <div class="col-md-4">
                               <input type="text" class="form-control" name="mname" placeholder="Mother's Name *" required="">
                           </div>
                           <div class="form-group col-lg-4">
                               <input type="text" class="form-control" name="mmobile" placeholder="Mother's Mobile Number *" required="">
       
                           </div>
       
                           <div class="form-group col-lg-4">
       
       
                               <input class="form-control hasDatepicker" id="datepicker" name="dob" placeholder="Date of Birth *" type="date" required="">
       
                           </div>
                       </div>
       
       
       
       
                       <div class="row">
                           <div class="col-md-4">
       
                               <select class="form-control" name="gender" required="">
                                   <option value="" disabled="" selected="">--Select Gender--</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                               </select>
       
                           </div>
       
                           <div class="form-group col-md-4">
       
                               <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Applicant Mobile Number *" required="">
       
                               <span id="error_phone" class="text-danger"></span>
                           </div>
                           <div class="form-group col-md-4">
       
       
                               <input type="text" class="form-control" name="email" id="email" placeholder="Applicant Email *" required="">
       
                               <span id="error_email" class="text-danger"></span>
                           </div>
                       </div>
       
       
       
       
                       <div class="row">
                           <div class="col-md-4">
       
                               <select class="form-control" name="bloodgroup" required="">
                                   <option value="" disabled="" selected="">Blood Group</option>
                                   <option>A+</option>
                                   <option>A-</option>
                                   <option>AB+</option>
                                   <option>AB-</option>
                                   <option>B+</option>
                                   <option>B-</option>
                                   <option>O+</option>
                                   <option>O-</option>
       
                               </select>
       
                           </div>
       
                           <div class="form-group col-lg-4">
       
       
                               <input type="text" class="form-control" name="lgurdian" placeholder="Local Gurdian Name *" required="">
       
                           </div>
                           <div class="form-group col-md-4">
       
                               <input type="text" class="form-control" name="lgurdian_mobile" placeholder="Gurdian Mobile Number *" required="">
       
                           </div>
                       </div>
       
       
       
                       <div class="row">
                           <div class="col-md-4">
       
                               <select class="form-control" name="reference">
                                   <option value="" disabled="" selected="">Reference</option>
                                   <option>None</option>
                                   <option>GUB Teacher</option>
                                   <option>Admin Personnel</option>
                                   <option>GUB Student</option>
                                   <option>YouTube</option>
                                   <option>Facebook</option>
                                   <option>Newspaper</option>
       
       
                               </select>
       
                           </div>
                           <div class="form-group col-md-4">
       
       
                               <input type="password" class="form-control" id="password" name="password" placeholder="Create Password *" required="">
       
                           </div>
                           <div class="form-group col-md-4">
       
       
                               <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password *" required="">
                               <span id="message"></span>
                           </div>
                       </div>
       
       
                       <div class="col-md-12">
                           <div class="form-group">
       
                              
                               <div class="input-group">
                                   <input type="file" id="image" name="image" class="form-control">
                                   <input type="text" class="form-control " disabled="" placeholder="Upload Image">
                                   <span class="input-group-btn">
                                         <button class="browse btn btn-primary input-group" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                       </span>
                               </div>
                           </div>
                           <br>
       
       
       
       
       
       
       
                           <p id="error1" style="display:none; color:#FF0000;">
                               Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                           </p>
                           <p id="error2" style="display:none; color:#FF0000;">
                               Maximum File Size Limit is 1MB.
                           </p>
                           <p id="error3" style="display:none; color:#FF0000;">
                               Photo must be 425 X 551 pixel(width X height)
                           </p>
                       </div>
       
       
       
       
           <hr>
       
       
                       <div class="row">
       
                           <div class="col-md-6 ">
       
                               <h4 style="background-color: grey; color: white; padding: 5px; border-radius: 5px; margin-bottom: 35px;">Present Address</h4>
       
                               <div class="form-group">
       
                                   <input type="text" class="form-control" id="pre_house" name="pre_house" placeholder="Enter House/Village" required="">
       
                               </div>
       
                               <div class="form-group">
       
                                   <input type="text" class="form-control" id="pre_road" name="pre_road" placeholder="Enter Road/Block/Sector" required="">
       
                               </div>
       
                               <div class="form-group">
       
                                   <input type="text" class="form-control" id="pre_post_office" name="pre_post_office" placeholder="Enter Post Office" required="">
       
                               </div>
       
                               <div class="form-group">
       
                                   <input type="text" class="form-control" id="pre_police_station" name="pre_police_station" placeholder="Enter Police Station/Thana" required="">
       
                               </div>
       
                               <div class="form-group">
       
                                   <select id="pre_district" name="pre_district" class="form-control" required="">
       
                                       <option value="">-Select District-</option>
       
                                       <option value="BAGERHAT">BAGERHAT</option>
       
                                       <option value="BANDARBAN">BANDARBAN</option>
       
                                       <option value="BARGUNA">BARGUNA</option>
       
                                       <option value="BARISAL">BARISAL</option>
       
                                       <option value="BHOLA">BHOLA</option>
       
                                       <option value="BOGRA">BOGRA</option>
       
                                       <option value="BRAHMANBARIA">BRAHMANBARIA</option>
       
                                       <option value="CHANDPUR">CHANDPUR</option>
       
                                       <option value="CHAPAINAWABGANJ">CHAPAINAWABGANJ</option>
       
                                       <option value="CHITTAGONG">CHITTAGONG</option>
       
                                       <option value="CHUADANGA">CHUADANGA</option>
       
                                       <option value="COMILLA">COMILLA</option>
       
                                       <option value="COX'S BAZAR">COX'S BAZAR</option>
       
                                       <option value="DHAKA">DHAKA</option>
       
                                       <option value="DINAJPUR">DINAJPUR</option>
       
                                       <option value="FARIDPUR">FARIDPUR</option>
       
                                       <option value="FENI">FENI</option>
       
                                       <option value="GAIBANDHA">GAIBANDHA</option>
       
                                       <option value="GAZIPUR">GAZIPUR</option>
       
                                       <option value="GOPALGANJ">GOPALGANJ</option>
       
                                       <option value="HABIGANJ">HABIGANJ</option>
       
                                       <option value="JAMALPUR">JAMALPUR</option>
       
                                       <option value="JESSORE">JESSORE</option>
       
                                       <option value="JHALAKATI">JHALAKATI</option>
       
                                       <option value="JHENAIDAH">JHENAIDAH</option>
       
                                       <option value="JOYPURHAT">JOYPURHAT</option>
       
                                       <option value="KHAGRACHHARI">KHAGRACHHARI</option>
       
                                       <option value="KHULNA">KHULNA</option>
       
                                       <option value="KISHOREGANJ">KISHOREGANJ</option>
       
                                       <option value="KURIGRAM">KURIGRAM</option>
       
                                       <option value="KUSHTIA">KUSHTIA</option>
       
                                       <option value="LAKSHMIPUR">LAKSHMIPUR</option>
       
                                       <option value="LALMONIRHAT">LALMONIRHAT</option>
       
                                       <option value="MADARIPUR">MADARIPUR</option>
       
                                       <option value="MAGURA">MAGURA</option>
       
                                       <option value="MANIKGANJ">MANIKGANJ</option>
       
                                       <option value="MEHERPUR">MEHERPUR</option>
       
                                       <option value="MOULVIBAZAR">MOULVIBAZAR</option>
       
                                       <option value="MUNSHIGANJ">MUNSHIGANJ</option>
       
                                       <option value="MYMENSINGH">MYMENSINGH</option>
       
                                       <option value="NAOGAON">NAOGAON</option>
       
                                       <option value="NARAIL">NARAIL</option>
       
                                       <option value="NARAYANGANJ">NARAYANGANJ</option>
       
                                       <option value="NARSINGDI">NARSINGDI</option>
       
                                       <option value="NATORE">NATORE</option>
       
                                       <option value="NETROKONA">NETROKONA</option>
       
                                       <option value="NILPHAMARI">NILPHAMARI</option>
       
                                       <option value="NOAKHALI">NOAKHALI</option>
       
                                       <option value="PABNA">PABNA</option>
       
                                       <option value="PANCHAGARH">PANCHAGARH</option>
       
                                       <option value="PATUAKHALI">PATUAKHALI</option>
       
                                       <option value="PIROJPUR">PIROJPUR</option>
       
                                       <option value="RAJBARI">RAJBARI</option>
       
                                       <option value="RAJSHAHI">RAJSHAHI</option>
       
                                       <option value="RANGAMATI">RANGAMATI</option>
       
                                       <option value="RANGPUR">RANGPUR</option>
       
                                       <option value="SATKHIRA">SATKHIRA</option>
       
                                       <option value="SHARIATPUR">SHARIATPUR</option>
       
                                       <option value="SHERPUR">SHERPUR</option>
       
                                       <option value="SIRAJGANJ">SIRAJGANJ</option>
       
                                       <option value="SUNAMGANJ">SUNAMGANJ</option>
       
                                       <option value="SYLHET">SYLHET</option>
       
                                       <option value="TANGAIL">TANGAIL</option>
       
                                       <option value="THAKURGAON">THAKURGAON</option>
       
                                   </select>
       
                               </div>
       
                           </div>
       
       
       
                           <div class="col-md-6 ">
       
                               <h4 style="background-color: grey; color: white; padding: 5px; border-radius: 5px;">Permanent Address</h4><br>
       
                               <input type="checkbox" name="same_address" id="same_address" onchange="myFunction()"> <label> Same as Present Address </label>
       
                               <div class="form-group">
       
                                   <input type="text" class="form-control" id="per_house" name="per_house" placeholder="Enter House/Village" required="">
       
                               </div>
       
                               <div class="form-group">
       
                                   <input type="text" class="form-control" id="per_road" name="per_road" placeholder="Enter Road/Block/Sector" required="">
       
                               </div>
       
                               <div class="form-group">
       
                                   <input type="text" class="form-control" id="per_post_office" name="per_post_office" placeholder="Enter Post Office" required="">
       
                               </div>
       
                               <div class="form-group">
       
                                   <input type="text" class="form-control" id="per_police_station" name="per_police_station" placeholder="Enter Police Station/Thana" required="">
       
                               </div>
       
                               <div class="form-group">
       
                                   <select id="per_district" name="per_district" class="form-control" required="">
       
                                       <option value="">-Select District-</option>
       
                                       <option value="BAGERHAT">BAGERHAT</option>
       
                                       <option value="BANDARBAN">BANDARBAN</option>
       
                                       <option value="BARGUNA">BARGUNA</option>
       
                                       <option value="BARISAL">BARISAL</option>
       
                                       <option value="BHOLA">BHOLA</option>
       
                                       <option value="BOGRA">BOGRA</option>
       
                                       <option value="BRAHMANBARIA">BRAHMANBARIA</option>
       
                                       <option value="CHANDPUR">CHANDPUR</option>
       
                                       <option value="CHAPAINAWABGANJ">CHAPAINAWABGANJ</option>
       
                                       <option value="CHITTAGONG">CHITTAGONG</option>
       
                                       <option value="CHUADANGA">CHUADANGA</option>
       
                                       <option value="COMILLA">COMILLA</option>
       
                                       <option value="COX'S BAZAR">COX'S BAZAR</option>
       
                                       <option value="DHAKA">DHAKA</option>
       
                                       <option value="DINAJPUR">DINAJPUR</option>
       
                                       <option value="FARIDPUR">FARIDPUR</option>
       
                                       <option value="FENI">FENI</option>
       
                                       <option value="GAIBANDHA">GAIBANDHA</option>
       
                                       <option value="GAZIPUR">GAZIPUR</option>
       
                                       <option value="GOPALGANJ">GOPALGANJ</option>
       
                                       <option value="HABIGANJ">HABIGANJ</option>
       
                                       <option value="JAMALPUR">JAMALPUR</option>
       
                                       <option value="JESSORE">JESSORE</option>
       
                                       <option value="JHALAKATI">JHALAKATI</option>
       
                                       <option value="JHENAIDAH">JHENAIDAH</option>
       
                                       <option value="JOYPURHAT">JOYPURHAT</option>
       
                                       <option value="KHAGRACHHARI">KHAGRACHHARI</option>
       
                                       <option value="KHULNA">KHULNA</option>
       
                                       <option value="KISHOREGANJ">KISHOREGANJ</option>
       
                                       <option value="KURIGRAM">KURIGRAM</option>
       
                                       <option value="KUSHTIA">KUSHTIA</option>
       
                                       <option value="LAKSHMIPUR">LAKSHMIPUR</option>
       
                                       <option value="LALMONIRHAT">LALMONIRHAT</option>
       
                                       <option value="MADARIPUR">MADARIPUR</option>
       
                                       <option value="MAGURA">MAGURA</option>
       
                                       <option value="MANIKGANJ">MANIKGANJ</option>
       
                                       <option value="MEHERPUR">MEHERPUR</option>
       
                                       <option value="MOULVIBAZAR">MOULVIBAZAR</option>
       
                                       <option value="MUNSHIGANJ">MUNSHIGANJ</option>
       
                                       <option value="MYMENSINGH">MYMENSINGH</option>
       
                                       <option value="NAOGAON">NAOGAON</option>
       
                                       <option value="NARAIL">NARAIL</option>
       
                                       <option value="NARAYANGANJ">NARAYANGANJ</option>
       
                                       <option value="NARSINGDI">NARSINGDI</option>
       
                                       <option value="NATORE">NATORE</option>
       
                                       <option value="NETROKONA">NETROKONA</option>
       
                                       <option value="NILPHAMARI">NILPHAMARI</option>
       
                                       <option value="NOAKHALI">NOAKHALI</option>
       
                                       <option value="PABNA">PABNA</option>
       
                                       <option value="PANCHAGARH">PANCHAGARH</option>
       
                                       <option value="PATUAKHALI">PATUAKHALI</option>
       
                                       <option value="PIROJPUR">PIROJPUR</option>
       
                                       <option value="RAJBARI">RAJBARI</option>
       
                                       <option value="RAJSHAHI">RAJSHAHI</option>
       
                                       <option value="RANGAMATI">RANGAMATI</option>
       
                                       <option value="RANGPUR">RANGPUR</option>
       
                                       <option value="SATKHIRA">SATKHIRA</option>
       
                                       <option value="SHARIATPUR">SHARIATPUR</option>
       
                                       <option value="SHERPUR">SHERPUR</option>
       
                                       <option value="SIRAJGANJ">SIRAJGANJ</option>
       
                                       <option value="SUNAMGANJ">SUNAMGANJ</option>
       
                                       <option value="SYLHET">SYLHET</option>
       
                                       <option value="TANGAIL">TANGAIL</option>
       
                                       <option value="THAKURGAON">THAKURGAON</option>
       
                                   </select>
       
                               </div>
       
                           </div>
       
                       </div>
       
       
       
           <br>
       
           <hr>
           <span style="font-size: 30px;">SSC/O-Level/Dakhil Information</span>
           <hr>
       
           <div class="row">
       
       
               <div class="form-group col-md-3">
                   <input type="text" class="form-control" name="sscpassyear" placeholder="Passing Year *" required="">
       
               </div>
               <div class="form-group col-lg-2">
       
       
                   <input type="text" class="form-control" name="sscroll" placeholder="Roll No *" required="">
       
               </div>
               <div class="form-group col-lg-3">
       
       
                   <input type="text" class="form-control" name="sscregno" placeholder="Registration No *" required="">
       
               </div>
               <div class="form-group col-lg-2">
       
       
                   <input type="text" class="form-control" name="sscgrade" placeholder="Grade *" required="">
       
               </div>
               <div class="form-group col-lg-2">
       
                   <select class="form-control" name="sscboard" required="">
                       <option value="" disabled="" selected="">Select Board</option>
                       <option>Dhaka</option>
       
                       <option>Barisal</option>
       
                       <option>Chittagong</option>
       
                       <option>Comilla</option>
       
                       <option>Dinajpur</option>
       
                       <option>Rajshahi</option>
       
                       <option>Jessore</option>
       
                       <option>Sylhet</option>
       
                       <option>Madrasah</option>
       
                       <option>Technical</option>
                       <option>Others</option>
                   </select>
       
       
               </div>
       
       
           </div>
       
           <hr>
       
           <hr>
       
           <div class="row">
               <div class="form-group col-md-3">
                   <input type="text" class="form-control" name="hscpassyear" placeholder="Passing Year *" required="">
       
               </div>
               <div class="form-group col-lg-2">
       
       
                   <input type="text" class="form-control" name="hscroll" placeholder="Roll No *" required="">
       
               </div>
               <div class="form-group col-lg-3">
       
       
                   <input type="text" class="form-control" name="hscregno" placeholder="Registration No *" required="">
       
               </div>
               <div class="form-group col-lg-2">
       
       
                   <input type="text" class="form-control" name="hscgrade" placeholder="Grade *" required="">
       
               </div>
               <div class="form-group col-lg-2">
       
                   <select class="form-control" name="hscboard" required="">
                       <option value="" disabled="" selected="">Select Board</option>
                       <option>Dhaka</option>
       
                       <option>Barisal</option>
       
                       <option>Chittagong</option>
       
                       <option>Comilla</option>
       
                       <option>Dinajpur</option>
       
                       <option>Rajshahi</option>
       
                       <option>Jessore</option>
       
                       <option>Sylhet</option>
       
                       <option>Madrasah</option>
       
                       <option>Technical</option>
                       <option>Others</option>
                   </select>
       
               </div>
       
       
           </div>
       
           <hr>
           <span style="font-size: 25px;">Bachelor Degree (if any)</span>
           <hr>
       
           <div class="row">
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="bachelor_degree_name" placeholder="Degree Name">
       
               </div>
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="bachelor_degree_institute" placeholder="Institution">
       
               </div>
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="bachelor_degree_result" placeholder="Class/CGPA">
       
               </div>
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="bachelor_degree_roll" placeholder="Roll/ID No">
       
               </div>
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="bachelor_degree_passyear" placeholder="Passing Year">
       
               </div>
       
       
           </div>
       
           <hr>
           <span style="font-size: 25px;">Master's Degree (if any)</span>
           <hr>
       
           <div class="row">
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="masters_degree_name" placeholder="Degree Name">
       
               </div>
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="masters_degree_institute" placeholder="Institution">
       
               </div>
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="masters_degree_result" placeholder="Class/CGPA">
       
               </div>
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="masters_degree_roll" placeholder="Roll/ID No">
       
               </div>
               <div class="form-group col-md-2">
       
                   <input type="text" class="form-control" name="masters_degree_passyear" placeholder="Passing Year">
       
               </div>
       
           </div>
       
           <hr>
       
           <p style="text-align:justify;"><b>Declaration:</b> I hereby accept that after getting admission to Green
               University, I will be bound to abide by the rules and regulations of the
               University and the GUB students’ Code of Conduct. I accept that
               manufacture, distribution, possession and consumption of tobacco
               products, alcohol, drugs and controlled substances are strictly prohibited
               in Green University premises and I will be subjected to disciplinary
               actions if I am found involved with any of these cases.
               I also hereby declare that all the information given by me in this
               application is true and correct to the best of my knowledge and belief. I
               also note that if any of the above statements are found to be incorrect or
               false or fake or any information or particulars have been suppressed or
               omitted there from, I am liable to be disqualified and my admission may
               be cancelled from the university at any level during my study.
               I have read and understood the contents of the admission requirements
               and scholarship policies for the various programs. I hereby permit the
               institute to use, display or transfer any of the details furnished by me in
               this form for complying with the admission formalities.</p>
               <div>



                <input type="checkbox" id="declaration"> Check here to indicate that you have read and agree to the <span style="color: green;">Declaration</span>
          
          
          
                </div>
       
              
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_submit_details" name="submit" value="Register">Submit</button>
        </form>
            </div>
      

            </div>
        </div>
            
        
        
    </section>

    <!-- Optional JavaScript -->
    <script src="{{ asset('public/themefronted/js/jquery.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/matchHeight/js/matchHeight-min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/bxslider/js/bxslider.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/waypoints/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/counterup/js/counterup.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/magnific-popup/js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('public/themefronted/js/custom.js')}}"></script>
</body>

</html>