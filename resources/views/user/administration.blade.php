@extends('user.body.main')
@section('user')

   
<!-- ==============================================
    ** Browse Teacher **
    =================================================== -->
    <section class="browse-teacher grey-bg padding-lg">
        <div class="container">
            <h2><span>Our Honourable</span> Administration</h2>
            <ul class="row browse-teachers-list clearfix">
                @foreach($allData as $key => $value )
                    <li class="col-xs-6 col-sm-3">
                        <figure> 
                            <img src="{{ ($value->image)? url('public/upload/administration/'.$value->image):url('upload/no_image.jpg') }}"width="123" height="124" alt=""> 
                             </figure>
                        <h3>{{ $value->name }}</h3><br>
                        <h3>{{ $value->designation }}</h3>
                        <h3>{{ $value->email }}</h3>
                        <!--<span class="designation">Chairman, Board of Trustees</span>-->
                        <!--<p class="equal-hight">-->
                        
                        <!--Minister, Ministry of Information-->
                        
                        <!--Government of Peoples’ Republic Of Bangladesh-->
                        
                        <!--</p>-->
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
<!--    ** Browse Administration  **-->
<!--    =================================================== -->-->
<!--    <section class="browse-teacher padding-lg">-->
<!--        <div class="container">-->
<!--            <h2><span></span> Administration </h2>-->
<!--            <ul class="row browse-teachers-list clearfix">-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/administratrion/administratrion1.jpg" width="124" height="124" alt=""> </figure>-->
<!--                    <h3> Mr. Sheikh Mostafizur Rahman</h3>-->
<!--                    <span class="designation">Chairman</span>-->
<!--                    <p class="equal-hight"><br>Deputy Director, Department of Physical Education-->

<!--                                            <br>Islamic University, Kushtia-->

<!--                                            <br>Nominee, Board of Trustees</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/administratrion/administratrion2.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>Mr. Md. Moniruzzaman </h3>-->
<!--                    <span class="designation">Member</span>-->
<!--                    <p class="equal-hight"><br>Physical Instructor-->

<!--                                           <br>Rabindranath Tagore Degree College-->

<!--                                           <br>Kumarkhali, Kushtia-->

<!--                                           <br>Nominee, Board of Trustees </p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/administratrion/administratrion3.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>Mr. Md. Fazle Rabbani</h3>-->
<!--                    <span class="designation">Member</span>-->
<!--                    <p class="equal-hight"><br>Lecturer, Mujibnagar Govt. Degree College, Meherpur-->

<!--                                           <br>Nominee, Board of Trustees</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/administratrion/administratrion4.jpg.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>  Professor Dr. Md. Shahidur Rahman </h3>-->
<!--                    <span class="designation">Member</span>-->
<!--                    <p class="equal-hight"><br>Head, Department of Bengali-->

<!--                                           <br>Rabindra Maitree University, Kushtia-->

<!--                                           <br>Vice-Chancellor’s Nominee</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <ul class="row browse-teachers-list clearfix">-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/administratrion/administratrion4.jpg" width="124" height="124" alt=""> </figure>-->
<!--                    <h3>Professor Dr. Mohammad Mamun  </h3>-->
<!--                    <span class="designation">Member</span>-->
<!--                    <p class="equal-hight"><br>Department of Economics-->

<!--                                           <br>Islamic University, Kushtia-->

<!--                                           <br> Syndicate Nominee</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/administratrion/administratrion5.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>Professor Dr. Halima Khatun</h3>-->
<!--                    <span class="designation">Member</span>-->
<!--                    <p class="equal-hight"><br>Department of Law-->

<!--                                           <br>Islamic University, Kushtia-->

<!--                                           <br>Syndicate Nominee</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="col-xs-6 col-sm-3">-->
<!--                    <figure> <img src="public/themefronted/images/administratrion/administratrion6.jpg" width="123" height="124" alt=""> </figure>-->
<!--                    <h3>zxcv</h3>-->
<!--                    <span class="designation">Member-Secretary</span>-->
<!--                    <p class="equal-hight"><br>Director-->
					
<!--					                       <br>Finance-->

<!--                                           <br>Rabindra Maitree University, Kushtia</p>-->
<!--                    <ul class="teachers-follow">-->
<!--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
              <!--  <li class="col-xs-6 col-sm-3">
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
    
    

   