@extends('user.body.main')
@section('user')


<!doctype html>
<html lang="en">



<body>

    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Header **
    =================================================== -->
    

    <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1></h1> 
                        <h1 style="text-align:left">Gallery</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Campus Tour **
    =================================================== -->
    <section class="campus-tour padding-lg">
        <!-- gallery filter -->
        <div class="container text-center">
            <div class="isotopeFilters">
                <ul class="gallery-filter clearfix">
                    <li class="active"><a href="" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".classes">Classes</a></li>
                    <li><a href="#" data-filter=".Party">Prom Party</a></li>
                    <li><a href="#" data-filter=".contest">Sport Contest</a></li>
                    <li><a href="#" data-filter=".music">Music Concert</a></li>
                </ul>
            </div>
        </div>
        <!-- end filter -->
        <ul class="gallery clearfix isotopeContainer">
            @foreach ($allData as $key=>$item)
                <li class="isotopeSelector contest">
                    <div class="overlay">
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->description}}</p>
                        <a class="galleryItem" href="{{url('public/upload/gallery/',$item->image) }}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>
                    </div>
                    <figure><img src="{{url('public/upload/gallery/',$item->image) }}" class="img-responsive" alt=""></figure>
                </li>
                
            @endforeach
            
            @foreach ($partys as $key=>$party)
                <li class="isotopeSelector Party">
                    <div class="overlay">
                        <h3>{{$party->title}}</h3>
                        <p>{{$party->description}}</p>
                        <a class="galleryItem" href="{{url('public/upload/gallery/',$party->image) }}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>
                    </div>
                    <figure><img src="{{url('public/upload/gallery/',$party->image) }}" class="img-responsive" alt=""></figure>
                </li>
                
            @endforeach
            @foreach ($contests as $key=>$contest)
                <li class="isotopeSelector contest">
                    <div class="overlay">
                        <h3>{{$contest->title}}</h3>
                        <p>{{$contest->description}}</p>
                        <a class="galleryItem" href="{{url('public/upload/gallery/',$contest->image) }}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>
                    </div>
                    <figure><img src="{{url('public/upload/gallery/',$contest->image) }}" class="img-responsive" alt=""></figure>
                </li>
                
            @endforeach
            
            @foreach ($classes as $key=>$class)
                <li class="isotopeSelector classes">
                    <div class="overlay">
                        <h3>{{$class->title}}</h3>
                        <p>{{$class->description}}</p>
                        <a class="galleryItem" href="{{url('public/upload/gallery/',$class->image) }}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>
                    </div>
                    <figure><img src="{{url('public/upload/gallery/',$class->image) }}" class="img-responsive" alt=""></figure>
                </li>
                
            @endforeach
            
            @foreach ($events as $key=>$event)
                <li class="isotopeSelector music">
                    <div class="overlay">
                        <h3>{{$event->title}}</h3>
                        <p>{{$event->description}}</p>
                        <a class="galleryItem" href="{{url('public/upload/gallery/',$event->image) }}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>
                    </div>
                    <figure><img src="{{url('public/upload/gallery/',$event->image) }}" class="img-responsive" alt=""></figure>
                </li>
                
            @endforeach
            
            <!--<li class="isotopeSelector Party contest music">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg2.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour2.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector Party contest music">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg3.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour3.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector Party music">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg4.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour4.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector contest classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg5.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour5.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector music contest classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg6.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour6.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector Party music contest classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg7.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour7.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector Party contest music contest classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg8.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour8.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector Party music contest classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg9.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour9.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector Party music contest classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg10.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour10.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector contest classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg4.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour4.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector music Party">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg5.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour5.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector music Party classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg6.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour6.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector Party classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg3.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour3.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
            <!--<li class="isotopeSelector classes">-->
            <!--    <div class="overlay">-->
            <!--        <h3>Lorem ipsum</h3>-->
            <!--        <p>Lorem ipsum</p>-->
            <!--        <a class="galleryItem" href="{{url('public/themefronted/images/tour-lg7.jpg')}}"><span class="icon-enlarge-icon"></span></a> <a href="#" class="more"><span class="icon-gallery-more-arrow"></span></a>-->
            <!--    </div>-->
            <!--    <figure><img src="{{url('public/themefronted/images/tour7.jpg')}}" class="img-responsive" alt=""></figure>-->
            <!--</li>-->
        </ul>
        <!--<div class="text-center">-->
        <!--    <ul class="pagination blue">-->
        <!--        <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</span> </a> </li>-->
        <!--        <li><a href="#">1</a></li>-->
        <!--        <li><a href="#">2</a></li>-->
        <!--        <li><a href="#">3</a></li>-->
        <!--        <li><a href="#">4</a></li>-->
        <!--        <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li>-->
        <!--    </ul>-->
        <!--</div>-->
    </section>

    <!-- ==============================================
    ** Footer **
    =================================================== -->
    

    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    <!-- Optional JavaScript -->
    <script src="{{ asset('public/themefronted/js/jquery.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/magnific-popup/js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/isotope/js/isotope.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/js/custom.js')}}"></script>
</body>

</html>



    
    </section>

   


@endsection