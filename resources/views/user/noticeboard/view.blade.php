@extends('user.body.main')
@section('user')


    <!-- ==============================================
    ** About **
    =================================================== -->
    <section class="intro-sec padding-lg">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-sm-push-6 left-block">
                  <h2>{{ $data->title }}</h2>
                  <p>{{ $data->description }}</p>
                  <div class="know-more-wrapper">
                      <a href="about.html" class="know-more">
                          <span class="icon-more-icon"></span>Read More
                      </a>
                  </div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                  <div class="video-block">
                      <div id="thumbnail_container"> <img src="{{ url('public/upload/notice',$data->image) }}" id="thumbnail" class="img-responsive" alt=""> </div>
                  </div>
              </div>
          </div>
      </div>
  </section>





@endsection