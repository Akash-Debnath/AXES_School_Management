<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>Axesgl University/School Management</title>

    <!-- CSS -->
   <link href="{{ asset('public/themefronted/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/magnific-popup/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/iconmoon/css/iconmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body class="fill-bg">

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
    ** Apply Online **
    =================================================== -->
    <section class="login-wrapper register">
        <div class="inner">
            <div class="regiter-inner">
                <div class="login-logo"> <a href="index.html"><img src="{{ asset('public/themefronted/images/login-logo.png')}}" class="img-responsive" alt=""></a> </div>
                <div class="head-block">
                    <h1>Application Confirmation</h1>
                </div>
            <form  method="POST"  class="form-outer">
              

                <input type="hidden" name="customer_name" class="form-control" id="customer_name" placeholder="" value="{{$students->firstname}} {{$students->lastname}}" >
                <input type="hidden" name="customer_id" class="form-control" id="customer_id" placeholder="" value="{{$students->sid}}" >
                <input type="hidden" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile" value="{{$students->phone}}" required>
                <input type="hidden" name="customer_email" class="form-control" id="email" placeholder="you@example.com" value="{{$students->email}}" required>
                <input type="hidden" class="form-control" id="address" placeholder="1234 Main St" value="{{$students->Address}}" required>
                <input type="hidden" value="{{$total}}" name="amount" id="total_amount" required/>
                <div class="cnt-block">
                    <h4>{{$students->firstname}} {{$students->lastname}},Thanks For your application</h4>
                    <h4>Your Application ID: {{$students->sid}}</h4>
                    <hr>
                    <style>
                        table, th, td {
                          border: 1px solid black;
                        }
                        
                        table {
                          width: 80%;
                        }
                        </style>
                    <table>
                        <tbody class="table">
                            <tr>
                                <td>Admission Fee:</td>
                                <td>@if($addfee !=null) {{$addfee->amount}}@endif</td>
                            </tr>
                            <tr>
                                <td>Library Fee:</td>
                                <td>@if($lbfee !=null){{$lbfee->amount}}@endif</td>
                            </tr>
                            <tr>
                                <td>Admission Form Fee:</td>
                                <td>@if($addffee !=null){{$addffee->amount}}@endif</td>
                            </tr>
                            <tr>
                                <td>Insurance Premium:</td>
                                <td>@if($ipfee !=null){{$ipfee->amount}}@endif</td>
                            </tr>
                           
                            <tr>
                                <td>Total Amount:</td>
                                <td>{{$total}}</td>
                            </tr>


                        </tbody>
                       
                    </table>

                    <br>
                    <p>
                       <strong>Note:</strong>  Any payments made by the online admission form is nonrefundable.<br>

                       <strong>Note:</strong> You may get one of the following discounts on admission fees after getting confirmation sms from the admission office. Please click on Apply button to continue. An admission officer will confirm you soon.<br>

                        HSC/Diploma Students	60% waiver on admission fees <br>
                        O/A Level Students	90% waiver on admission fees <br>
                        SEU Graduates	90% waiver on admission fees <br>
                        Non-SEU Graduates	75% waiver on admission fees <br>
                    </p>
                   
                   
                        <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                        token="if you have any token validation"
                        postdata="1200"
                        order="If you already have the transaction generated for current order"
                        endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                        </button>
                </div>
            </form>
               
                
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


<!-- If you want to use the popup integration, -->
<script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();
    obj.cus_id = $('#customer_id').val();

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

    <!-- Optional JavaScript -->
    <script src="{{ asset('public/themefronted/js/jquery.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/matchHeight/js/matchHeight-min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/bxslider/js/bxslider.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/waypoints/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/counterup/js/counterup.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/magnific-popup/js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('public/themefronted/js/custom.js')}}"></script>
</body>

</html>
