@extends('user.body.main')
@section('user')
   <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>Blog</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- ==============================================
    ** Blog **
    =================================================== -->
    <div class="container blog-wrapper padding-lg">
        <div class="row">
            <!-- Start Left Column -->
            <div class="col-sm-8 blog-left">
                <ul class="blog-listing">
                    @foreach ($data as $notice )
                        <li> 
                            <img src="{{ url('public/upload/notice',$notice->image) }}" class="img-responsive" alt="">
                            <h2>{{ $notice->title }}</h2>
                            <p>{{ $notice->description }}</p>
                            <a href="{{ route('notice.view',$notice->id) }}" class="read-more"><span class="icon-play-icon"></span>Read More</a>
                        </li>
                        
                    @endforeach
                   
                
                   
                </ul>
                <ul class="pagination">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</span> </a> </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li>
                </ul>
            </div>
            <!-- End Left Column -->

            <!-- Start Right Column -->
            <div class="col-sm-4">
                <div class="blog-right">
                   
                    <div class="recent-post">
                        <h3>Recent Posts</h3>
                        <ul>
                            <li class="clearfix"> <a href="#">
                                    <div class="img-block"><img src="images/rp-thumb1.jpg" class="img-responsive" alt=""></div>
                                    <div class="detail">
                                        <h4>simply dummy text of the...</h4>
                                        <p><span class="icon-date-icon ico"></span><span>14 Feb</span> 2017</p>
                                    </div>
                                </a> </li>
                            <li class="clearfix"> <a href="#">
                                    <div class="img-block"><img src="images/rp-thumb2.jpg" class="img-responsive" alt=""></div>
                                    <div class="detail">
                                        <h4>simply dummy text of the...</h4>
                                        <p><span class="icon-date-icon ico"></span><span>12 Feb</span> 2017</p>
                                    </div>
                                </a> </li>
                            <li class="clearfix"> <a href="#">
                                    <div class="img-block"><img src="images/rp-thumb3.jpg" class="img-responsive" alt=""></div>
                                    <div class="detail">
                                        <h4>simply dummy text of the...</h4>
                                        <p><span class="icon-date-icon ico"></span><span>08 Feb</span> 2017</p>
                                    </div>
                                </a> </li>
                        </ul>
                    </div>
                   
                </div>
            </div>
            <!-- End Right Column -->
        </div>
    </div>





@endsection