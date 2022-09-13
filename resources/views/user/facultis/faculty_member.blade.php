@extends('user.body.main')
@section('user')

<style>
.thumbnail > img, .thumbnail a > img {
    display: block;
    max-width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}
.lazyloaded {
    opacity: 1;
    transition: opacity 400ms;
    transition-delay: 0ms;
}
img {
    max-width: 100%;
    height: auto;
}
a, input, select, img, span, label, ul, li, .fa, :before, :after {
    transition: all 0.3s linear;
    outline: none;
}
img {
    vertical-align: middle;
}
img {
    border: 0;
}
</style>
<section id="content-area">
    <div class="container">
        <div class="page-has-sidebar">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div id="content-main" class="row display-flex"> 
                        @foreach($allData as $key => $deans )                      
                            <div class="col-xs-12 col-md-2">
                                <div class="thumbnail thumbnail-profile profile-faculty clearfix">
                                    <a href="{{route('profile_view',$deans->id)}}" class="feature-img">
                                        <img width="265" height="285" alt="" data-src="{{url('public/upload/dean/',$deans->image) }}" class="attachment-full size-full wp-post-image lazyloaded" src="{{url('public/upload/dean/',$deans->image) }}"><noscript><img width="265" height="285" src="{{url('public/upload/dean/',$deans->image) }}" class="attachment-full size-full wp-post-image" alt="" /></noscript>        </a>
                                    <div class="caption">
                                        <p>{{ $deans->name }}</p>
                                        <span>{{ $deans->designation }}</span>
                                        <span>{{ $deans->email }}</span>
                                        <div class="btn-group" style="padding: 20px 0 0;">
                                            <a href="{{route('profile_view',$deans->id)}}" class="btn btn-primary link-profile" style="width:100%;">View Profile</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                       

                    </div>
                    
                </div>  
               
                          
            </div>
            
        </div>
    </div>
</section>


@endsection



