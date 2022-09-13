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
                     <h1>ALL  Courses</h1>
                        <p>Life at {{ Websiteinfo()->name }} is very much eventful. Through a lot of meaningful and impactful events students get the opportunity to develop their skills and portfolio beyond the curriculam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** News & Events **
    =================================================== -->
    <section class="news-wrapper padding-lg">
        <div class="container">
            <ul class="row news-listing">
                @foreach ($data as $item)
                <li class="col-xs-6 col-sm-4 grid-item">
                    <div class="inner"> <img src="{{url('public/upload/department/',$item->image) }}" class="img-responsive" alt="">
                        <div class="cnt-block">
                            <ul class="post-detail">
                                <li><span class="icon-date-icon ico"></span> {{$item->created_at}}</li>
                                {{-- <li><span class="icon-chat-icon ico"></span><span class="bold">14</span> Comments</li> --}}
                            </ul>
                            <h2>{{$item->name}}</h2>
                            <a href="{{route('departmentdetails',$item->id)}}" class="read-more"><span class="icon-play-icon"></span>Read More</a>
                        </div>
                    </div>
                </li>
                    
                @endforeach
               
               
            </ul>
            {{-- <div class="text-center">
                <ul class="pagination blue">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</span> </a> </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li>
                </ul>
            </div> --}}
        </div>
    </section>

 @endsection