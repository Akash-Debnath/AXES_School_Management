
@extends('user.body.main')
@section('user')

   
<!-- ==============================================
    ** Browse Teacher **
    =================================================== -->
    <section class="browse-teacher grey-bg padding-lg">
        <div class="container">
            <h2><span>Our Honourable</span> Disciplinary Committee </h2>
            <ul class="row browse-teachers-list clearfix">
                @foreach($allData as $key => $value )
                    <li class="col-xs-6 col-sm-3">
                        <figure> 
                            <img src="{{ ($value->image)? url('public/upload/disciplinarycom/'.$value->image):url('upload/no_image.jpg') }}"width="123" height="124" alt=""> 
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
<!--    ** Browse Disciplinary Committee  **-->
<!--    =================================================== -->-->
<!--    <section class="browse-teacher padding-lg">-->
<!--        <div class="container">-->
<!--            <h2><span></span> Disciplinary Committee  </h2>-->
<!--            <ul class="row browse-teachers-list clearfix">-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/DISCIPLINECOMMITTEE/DISCIPLINECOMMITTEE1.jpg" width="124" height="124" alt=""> </figure>-->
<!--                    <h3>Professor Dr. Mohammad Johurul Islam</h3>-->
<!--                    <span class="designation"> Chairman</span>-->
<!--                    <p class="equal-hight"><br>Department of Law,  Islamic University-->

<!--                                           <br>Nominee, Board of Trustees-->

<!--                                           <br>Rabindra Maitree University</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/DISCIPLINECOMMITTEE/DISCIPLINECOMMITTEE1.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>Professor Dr. Md. Shahjahan AliBruno Acselrad</h3>-->
<!--                    <span class="designation">Member</span>-->
<!--                    <p class="equal-hight"><br>Vice -Chancellor-->

<!--                                           <br>Rabindra Maitree University</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/DISCIPLINECOMMITTEE/DISCIPLINECOMMITTEE1.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>zxcvb</h3>-->
<!--                    <span class="designation">Member</span>-->
<!--                    <p class="equal-hight"><br>Dean of all Faculties-->

<!--                                          <br>Rabindra Maitree University</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/DISCIPLINECOMMITTEE/DISCIPLINECOMMITTEE1.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3> Professor Md. Iqbal Hossain </h3>-->
<!--                    <span class="designation">Member</span>-->
<!--                    <p class="equal-hight"><br>Head of the Department, Department of English-->

<!--                                           <br>Rabindra Maitree University-->

<!--                                           <br>Syndicate Nominee</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <ul class="row browse-teachers-list clearfix">-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/DISCIPLINECOMMITTEE/DISCIPLINECOMMITTEE1.jpg" width="124" height="124" alt=""> </figure>-->
<!--                    <h3>Dr. Most. Ismat Ara Khatun</h3>-->
<!--                    <span class="designation"> Member </span>-->
<!--                    <p class="equal-hight"><br>Registrar (In Charge)-->

<!--                                           <br>Rabindra Maitree University</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/DISCIPLINECOMMITTEE/DISCIPLINECOMMITTEE1.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>zxcvb</h3>-->
<!--                    <span class="designation">Member-Secretary</span>-->
<!--                    <p class="equal-hight">Proctor -->

<!--                                         <br>Rabindra Maitree University</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
                <!--<li class="col-xs-6 col-sm-3">
<!--                    <figure> <img src="images/teacher3.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>Bruno Acselrad</h3>-->
<!--                    <span class="designation">Development</span>-->
<!--                    <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="images/teacher4.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>Bruno Acselrad</h3>-->
<!--                    <span class="designation">professor</span>-->
<!--                    <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->-->
<!--            </ul>-->
<!--        </div>-->
<!--    </section>-->
   

<!--@endsection-->
    
    

   