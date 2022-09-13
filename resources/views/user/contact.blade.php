@extends('user.body.main')
@section('user')
<!-- ==============================================
    ** Inner Banner **
    =================================================== -->
    <div class="inner-banner contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1>Contact Us</h1>
                        <!--<p>{{ $contacts->title }}</p>-->
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3"> <a href="{{route('applyaddmission')}}" class="apply-online clearfix">
                        <!--<div class="left clearfix"> <span class="icon"><img src="images/apply-online-sm-ico.png" class="img-responsive" alt=""></span> <span class="txt">Apply Online</span> </div>-->
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a></div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Contact Us **
    =================================================== -->
   <section class="form-wrapper padding-lg">
        <div class="container">
            <form method="post" action="{{ route('contact.form') }}" >
                @csrf
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="name" type="text" placeholder="Name">
                    </div>
                    <div class="col-sm-6">
                        <input name="email" type="text" placeholder="Email">
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm-12">
                        <input name="subject" type="text" placeholder="Title">
                    </div>
                    
                </div>
                <br>
                <div class="row input-row">
                    <div class="col-sm-12">
                        <div class="form-group">
    
                            <textarea class="form-control"  name='message' rows="3" placeholder="Write Message......"></textarea>
                         </div>
                                               
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="btn" value='Send Message' type='submit'>
                       
                        <div class="msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <!-- ==============================================
    ** Google Map **
    =================================================== -->
    <section class="google-map">
        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14590.491372391061!2d89.1258402!3d23.9029892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x30d1d4c04ffe5db8!2sRabindra%20Maitree%20University!5e0!3m2!1sen!2sbd!4v1659523396151!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="container">
            <div class="contact-detail">
                <div class="address">
                    <div class="inner">
                        <h3>{{ $contacts->title }}</h3>
                        <p>{{ $contacts->address }}</p>
                    </div>
                    <div class="inner">
                        <h3>{{ $contacts->phone }}</h3>
                    </div>
                    <div class="inner"> <a href="mailto:admin@rmu.ac.com">{{ $contacts->email }}</a> </div>
                </div>
                <div class="contact-bottom">
                    <ul class="follow-us clearfix">
                        <li><a href="https://www.facebook.com/official.rabindramaitree"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <!--<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                        <!--<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
    ** Have Questions? **
    =================================================== -->
    <section class="our-impotance have-question padding-lg">
        <div class="container">
            <h2>Have Any Query?</h2>
            <ul class="row">
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="images/help-center-ico.jpg" alt="Malleable Study Time">
                        <h3>Help Center</h3>
                        <p>?????????????????.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="images/faq-ico.jpg" alt="Placement Assistance">
                        <h3>Faq’s</h3>
                        <p>Edumart University Online has access to all of Edumart Group’s placement resources and alumni network, through which thousands of job opportunities are generated.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="images/document-ico.jpg" alt="Easy To Access">
                        <h3>Technical Documents</h3>
                        <p>There is easy accessibility to online help in terms of online teachers and online forums. Teachers can be contacted with the help of video chats and e-mails.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>



    
    </section>

   


@endsection