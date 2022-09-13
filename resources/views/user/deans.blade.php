@extends('user.body.main')
@section('user')

   
<!-- ==============================================
    ** Browse Dean **
    =================================================== -->
    <section class="browse-teacher grey-bg padding-lg">
        <div class="container"> 
            <h2><span>Our Honourable</span> Dean of the Faculties</h2>
            <ul class="row browse-teachers-list clearfix">
                @foreach($allData as $key => $value )
                    <li class="col-xs-6 col-sm-3">
                        <figure> 
                            <img src="{{ ($value->image)? url('public/upload/dean/'.$value->image):url('upload/no_image.jpg') }}"width="123" height="124" alt=""> 
                             </figure>
                        <h3>{{ $value->name }}</h3>
                        <h3>{{ $value->designation }}</h3>
                        <h3>{{ $value->email }}</h3>
                        
                       <ul class="teachers-follow">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                       </ul>
                    </li>
                @endforeach
                  
                               
        </div> 
                
                                        
    
    </section>
   


@endsection



