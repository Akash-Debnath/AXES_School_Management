@extends('user.body.main')
@section('user')

   
<!-- ==============================================
    ** Browse Teacher **
    =================================================== -->
    <section class="browse-teacher grey-bg padding-lg">
        <div class="container">
            <h2><span>Our Honourable</span> COMPLAINT COMMITTEE</h2>
            <ul class="row browse-teachers-list clearfix">
                @foreach($allData as $key => $value )
                    <li class="col-xs-6 col-sm-3">
                        <figure> 
                            <img src="{{ ($value->image)? url('public/upload/complaintcom/'.$value->image):url('upload/no_image.jpg') }}"width="123" height="124" alt=""> 
                             </figure>
                        <h3>{{ $value->name }}</h3><br>
                        <h3>{{ $value->designation }}</h3>
                        <h3>{{ $value->email }}</h3>
                        {{-- <span class="designation">Chairman, Board of Trustees</span>
                        <p class="equal-hight">
                        
                        Minister, Ministry of Information
                        
                        Government of Peoples’ Republic Of Bangladesh
                        
                        </p> --}}
                       <ul class="teachers-follow">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                       </ul>
                    </li>
                @endforeach
                  
            </ul>

            
            
                    
                  
                   
                       
                       
                    
                            
                 

                         
        </div> 
                
                                        
    
    </section>
   


@endsection







<!--@extends('user.body.main')-->
<!--@section('user')-->


  <!-- ==============================================
<!--    ** Browse Complaint Committee **-->
<!--    =================================================== -->-->

<!--<section class="browse-teacher padding-lg">-->
<!--<div class="container">-->
<!--    <h2> Complaint Committee</h2>-->
<!--    <ul class="row browse-teachers-list clearfix">-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="public/themefronted/complaintcommittee/images/complaintcommittee_member1.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Dr. Most. Ismat Ara Khatun</h3>-->
<!--            <span class="designation">Head</span>-->
<!--            <p><br>Registrar (In Charge)-->

<!--               <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="public/themefronted/complaintcommittee/images/complaintcommittee_member2.jpg" alt=" " width="123" height="124"> </figure>-->
<!--            <h3>Mr. S M Hasibur Rashid</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Lecturer, Department of Bengali-->

<!--                <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="ppublic/themefronted/complaintcommittee/images/complaintcommittee_member3.jpg"  alt="" width="123" height="124"> </figure>-->
<!--            <h3> Professor Dr. Halima Khatun</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Law,-->

<!--                <br>Islamic University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="public/themefronted/complaintcommittee/images/complaintcommittee_member4.jpg"  alt="" width="123" height="124"> </figure>-->
<!--            <h3>Advocate Srabonti Mukharjee</h3>-->
<!--            <span class="designation"> Member </span>-->
<!--            <p><br>District Project Officer-->

<!--               <br>IRSOP, BLAST, Kushtia Unit-->

<!--               <br>Judge Court Kushtia-->

<!--               <br>Contact: 01928-400073</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <ul class="row browse-teachers-list clearfix">-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="public/themefronted/complaintcommittee/images/complaintcommittee_member5.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Blank Blank</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
       <!-- <li class="col-xs-6 col-sm-3">
<!--            <figure> <img src="images/teacher2.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Bruno Acselrad</h3>-->
<!--            <span class="designation">Senior Lecturor</span>-->
<!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="images/teacher3.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Bruno Acselrad</h3>-->
<!--            <span class="designation">Development</span>-->
<!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="images/teacher4.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Bruno Acselrad</h3>-->
<!--            <span class="designation">professor</span>-->
<!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li> -->-->
<!--      </ul>-->
<!--    </div>-->

<!--</section>-->

<!--@endsection-->