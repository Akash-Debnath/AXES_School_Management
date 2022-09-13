@extends('user.body.main')
@section('user')

   
<!-- ==============================================
    ** Browse Teacher **
    =================================================== -->
    <section class="browse-teacher grey-bg padding-lg">
        <div class="container">
            <h2><span>Our Honourable</span> BOARD OF TRRUSTEES</h2>
            <ul class="row browse-teachers-list clearfix">
                @foreach($allData as $key => $value )
                    <li class="col-xs-6 col-sm-3">
                        <figure> 
                            <img src="{{ (!empty($value->image))? url('public/upload/student_images/'.$value->image):url('upload/no_image.jpg') }}"width="123" height="124" alt=""> 
                             </figure>
                        <h3>{{ $value->name }}</h3>
                        <span class="designation">Chairman, Board of Trustees</span>
                        <p class="equal-hight">
                        
                        Minister, Ministry of Information
                        
                        Government of Peoples’ Republic Of Bangladesh
                        
                        </p>
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
            </ul>

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
                            
                 

                         
        </div> 
                
                                        
    
    </section>
   


@endsection



