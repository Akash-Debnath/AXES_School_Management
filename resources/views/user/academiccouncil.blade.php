
@extends('user.body.main')
@section('user')

   
<!-- ==============================================
    ** Browse Teacher **
    =================================================== -->
    <section class="browse-teacher grey-bg padding-lg">
        <div class="container">
            <h2><span>Our Honourable</span>Academic Council</h2>
            <ul class="row browse-teachers-list clearfix">
                @foreach($allData as $key => $value )
                    <li class="col-xs-6 col-sm-3">
                        <figure> 
                            <img src="{{ ($value->image)? url('public/upload/academiccouncil/'.$value->image):url('upload/no_image.jpg') }}"width="123" height="124" alt=""> 
                             </figure>
                        <h3>{{ $value->name }}</h3><br>
                        <h3>{{ $value->designation }}</h3>
                        <h3>{{ $value->email }}</h3>
                       
                       <ul class="teachers-follow">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                       </ul>
                    </li>
                @endforeach
                  {{-- <li class="col-xs-6 col-sm-3">
                     <figure> <img src="public/themefronted/images//johurul.png" width="123" height="124" alt=""> </figure>
                     <h3>Professor Dr. Mohammad Johurul Islam</h3>
                     <span class="designation">Founder and Vice-Chairman</span>
                     <span class="Email">example@gamil.com</span>
                     <p class="equal-hight">Head, Department of Law, Islamic University, Kushtia

                        Former Dean, Faculty of Law, Islamic University, Kushtia
                     
                        Present Address:
                     
                        D-169, Housing Estate, Kushtia
                     
                        Permanent Address:
                     
                        Vill. Shail Kati, Post: Gosher Kuthi
                     
                        PS. Rajbari, District: Rajbari</p>
                       <ul class="teachers-follow">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>
                   <li class="col-xs-6 col-sm-3">
                       <figure> <img src="public/themefronted/images/hasanul_haq.png" width="123" height="124" alt=""> </figure>
                       <h3>Muhammad Shamsur Rahman Babu</h3>
                        <span class="designation">Member</span>
                       <p class="equal-hight">Law Officer (Deputy Registrar)

                        Islamic University, Kushtia
                     
                        Permanent Address:
                     
                       27/11, Kazi Nazrul Islam Road, Courtpara, Kushtia</p>
                       <ul class="teachers-follow">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        </ul>
                   </li>
                    <li class="col-xs-6 col-sm-3">
                        <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                        <h3>Shaikh Mostafizur Rahman</h3>
                        <span class="designation">professor</span>
                        <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <ul class="teachers-follow">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>
                 --}}
            {{-- </ul>

            <ul class="row browse-teachers-list clearfix">    
							
                <li class="col-xs-6 col-sm-3">
                   <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                   <h3>Professor Dr. Abu Sayed Mohammad Ali</h3>
                   <span class="designation">professor</span>
                   <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <ul class="teachers-follow">
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                   </ul>
                </li>    
                    <li class="col-xs-6 col-sm-3">
                        <figure> <img src="public/themefronted/images/halimakhatun.png" width="123" height="124" alt=""> </figure>
                        <h3> Professor Dr. Halima Khatun</h3>
                        <span class="designation">professor</span>
                        <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <ul class="teachers-follow">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>   
                        <li class="col-xs-6 col-sm-3">
                            <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                            <h3>Dr. Md. Anisur Rahman</h3>
                            <span class="designation">professor</span>
                            <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            <ul class="teachers-follow">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>    
                       <li class="col-xs-6 col-sm-3">
                          <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                              <h3>Md. Fazley Robbani</h3>
                            <span class="designation">professor</span>
                            <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            <ul class="teachers-follow">
                             <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            </ul>
                        <li> 
            </ul>
            
                    <ul class="row browse-teachers-list clearfix">  
                       
                                <li class="col-xs-6 col-sm-3">
                                    <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                                    <h3>Md. Moniruzzaman</h3>
                                    <span class="designation">professor</span>
                                    <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    <ul class="teachers-follow">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>    
                                    <li class="col-xs-6 col-sm-3">
                                        <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                                        <h3>  Most. Ismat Ara Khatun</h3>
                                        <span class="designation">professor</span>
                                        <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <ul class="teachers-follow">
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>    
                                            <li class="col-xs-6 col-sm-3">
                                                    <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                                                    <h3> Dr. Mahbub Bin Shahjahan   </h3>
                                                        <span class="designation">professor</span>
                                                            <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                                        <ul class="teachers-follow">
                                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                                        </ul>
                                            </li>    
                                <li class="col-xs-6 col-sm-3">
                                    <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                                    <h3> Md. Zulfikar Ali</h3>
                                    <span class="designation">professor</span>
                                    <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    <ul class="teachers-follow">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>   
                    </ul
                  
                    <ul class="row browse-teachers-list clearfix">  
                       
                        <li class="col-xs-6 col-sm-3">
                            <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                            <h6>Md. Moniruzzaman</h5>
                            <span class="designation">professor</span>
                            <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            <ul class="teachers-follow">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>    
                            <li class="col-xs-6 col-sm-3">
                                <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                                <h6>  Most. Ismat Ara Khatun</h5>
                                <span class="designation">professor</span>
                                <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                <ul class="teachers-follow">
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                </ul>
                            </li>    
                                    <li class="col-xs-6 col-sm-3">
                                            <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                                            <h6> Dr. Mahbub Bin Shahjahan   </h5>
                                                <span class="designation">professor</span>
                                                    <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                                <ul class="teachers-follow">
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                                </ul>
                                    </li>    
                        <li class="col-xs-6 col-sm-3">
                            <figure> <img src="public/themefronted/images/example_4.jpg" width="123" height="124" alt=""> </figure>
                            <h6> Md. Zulfikar Ali</h5>
                            <span class="designation">professor</span>
                            <p class="equal-hight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            <ul class="teachers-follow">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>   
            </ul
                            
                  --}}

                         
        </div> 
                
                                        
    
    </section>
   


@endsection





<!--@extends('user.body.main')-->
<!--@section('user')-->



<!-- ==============================================
<!--    ** Browse Academic Council Committee **-->
<!--    =================================================== -->-->
  
<!--<section class="browse-teacher padding-lg">    -->
<!--        <div class="continer">-->
<!--         <h2><span></span> ACADEMIC COUNCIL</h2>-->
<!--    <ul class="row browse-teachers-list clearfix">-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--             public/themefronted/images/academiccouncil/academiccouncil_member1.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3> Professor Dr. Mohammad Shahjahan Ali</h3>-->
<!--            <span class="designation">Chairman</span>-->
<!--            <p><br>Vice-Chancellor-->

<!--               <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member2.jpg"  alt="" width="123" height="124"> </figure>-->
<!--            <h3> Pro Vice Chancellor</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p></p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member3.jpg"  alt="" width="123" height="124"> </figure>-->
<!--            <h3>Dean of all Faculties</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p></p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member4.jpg"  alt="" width="123" height="124"> </figure>-->
<!--            <h3>Head of all Departments</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p></p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <ul class="row browse-teachers-list clearfix">-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member5.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3> Professor Dr. Md. Shahidur Rahman </h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p>Department of Bengali-->

<!--               <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="public/themefronted/images/academiccouncil/academiccouncil_member6.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor Md. Iqbal Hossain </h3>-->
<!--            <span class="designation"> Member</span>-->
<!--            <p><br>Department of English-->

<!--               <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member7.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor Dr. A F M Mohsin</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Law-->

<!--               <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member8.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor Dr. Md. Shahjahan Ali</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Business Administration-->

<!--               <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li> -->
<!--    </ul>-->

<!--    <ul class="row browse-teachers-list clearfix">-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member9.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor .Md. Sadrul Anam Sardar</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Agriculture-->

<!--               Department of Information and Communication-->

<!--               Engineering-->

<!--               Rabindra Maitree UniversityRabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member10.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor Dr. Md. Abdullah Ansary</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Computer Science and Engineering-->

<!--               <br>Rabindra Maitree University, Kushtia</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member11.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3> Professor Dr. Mohammad Johurul Islam</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Law, Islamic University, Kushtia-->

<!--               <br>Nominee, Board of Trustees</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member12.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor Dr. Abu Syed Mohammad Ali</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Arabic Language and Literature-->

<!--               <br>Islamic University, Kushtia-->

<!--               <br>Nominee, Board of Trustee</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li> -->
<!--    </ul>-->
<!--    <ul class="row browse-teachers-list clearfix">-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member13.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor Dr. Halima Khatun</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Law, Islamic University-->

<!--               <br>Nominee, Board of Trustees</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member14.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3> Professor Dr. Md. Anowar Hossain</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Biochemistry-->

<!--              <br>University of Dhaka-->

<!--              <br>Syndicate Nominee-->

<!--              <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member15.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor Dr. Mohammad Mamun</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Economics-->

<!--               <br>Islamic University-->

<!--               <br>Syndicate Nominee-->

<!--                <br> Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="                     -->
<!--public/themefronted/images/academiccouncil/academiccouncil_member16.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Dr. Most. Ismat Ara Khatun</h3>-->
<!--            <span class="designation">Secretary</span>-->
<!--            <p><br>Registrar (In Charge)-->

<!--               <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li> -->
<!--    </ul>-->
   <!-- <ul class="row browse-teachers-list clearfix">
<!--        <li class="col-xs-6 col-sm-3">-->
<!--            <figure> <img src="images/ict_member1.jpg" alt="" width="123" height="124"> </figure>-->
<!--            <h3>Professor Dr. Md. Jamshed Ali Sarkar</h3>-->
<!--            <span class="designation">Member</span>-->
<!--            <p><br>Department of Information and Communication-->

<!--               <br>Engineering-->

<!--               <br>Rabindra Maitree University</p>-->
<!--            <ul class="teachers-follow">-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--       <li class="col-xs-6 col-sm-3">-->
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
<!--          </li>-->-->
<!--        </ul>-->
<!--    </div> -->
<!--</section>  -->

<!--@endsection-->
    
    

   