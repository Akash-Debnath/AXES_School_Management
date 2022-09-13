@extends('user.body.main')
@section('user')


<section class="login-wrapper">
    <div class="inner">
        <div class="login">
            <div class="login-logo">
                <a href="index.html"><img src="images/login-logo.png" class="img-responsive" alt=""></a>
            </div>
            <div class="head-block">
                <h1>LOGIN Now</h1>
            </div>
            <div class="cnt-block">
                <form action="#" method="get" class="form-outer">
                    <input name="Username or Email" type="text" placeholder="Username or Email">
                    <input name="password" type="password" placeholder="password">
                    <div class="button-outer">
                        <button class="btn">Login now <span class="icon-more-icon"></span></button>
                        <div class="or hidden-xs">or</div>
                        <button class="btn register" formaction="register.html">Register now <span class="icon-more-icon"></span></button>
                    </div>
                    <div class="remember">
                        <div class="check">
                            <input type="checkbox" id="test1" />
                            <label for="test1">Remember me</label>
                        </div>
                        <a href="#" class="forgot"><span>?</span>Forgot password</a>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <ul class="follow-us clearfix">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

    
    </section>

   


@endsection