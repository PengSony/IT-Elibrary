<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1.0, user-scalable=no">
    <link href="{{asset('../css/main-page.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/jquery-3.2.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto+Condensed')}}">
    {{--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">--}}
    <title>ITE Library</title>
</head>
<body>
<div class="main-full-page">

    <header>
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="small-logo-container">
                        <a class="small-logo" href="/home-page" style="text-decoration: none;">IT E-Library</a>
                    </div>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/home-page">Home</a></li>

                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-sm-2">
                                    <ul>
                                        <li class="dropdown-header">Web Development</li>
                                        <li><a href="#">Html and Css</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                        <li><a href="#">Jquery</a></li>
                                        <li><a href="#">BootStrap</a></li>
                                        <li><a href="#">Angular Js</a></li>
                                        <li><a href="#">More</a></li>

                                    </ul>
                                </li>
                                <li class="col-sm-2">
                                    <ul>
                                        <li class="dropdown-header">Programming</li>
                                        <li><a href="#">Python</a></li>
                                        <li><a href="#">C and C++</a></li>
                                        <li><a href="#">Java</a></li>
                                        <li><a href="#">Objective C</a></li>
                                        <li><a href="#">Swift</a></li>
                                        <li><a href="#">More</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-2">
                                    <ul>
                                        <li class="dropdown-header">Computer Security</li>
                                        <li><a href="#">Easy to Customize</a></li>
                                        <li><a href="#">Calls to action</a></li>
                                        <li><a href="#">Custom Fonts</a></li>
                                        <li><a href="#">Slide down on Hover</a></li>
                                    </ul>
                                </li>

                                <li class="col-sm-2">
                                    <ul>
                                        <li class="dropdown-header">Machine Learning</li>
                                        <li><a href="#">Easy to Customize</a></li>
                                        <li><a href="#">Calls to action</a></li>
                                        <li><a href="#">Custom Fonts</a></li>
                                        <li><a href="#">Slide down on Hover</a></li>
                                    </ul>
                                </li>

                                <li class="col-sm-2">
                                    <ul>
                                        <li class="dropdown-header">Much more</li>
                                        <li><a href="#">Easy to Customize</a></li>
                                        <li><a href="#">Calls to action</a></li>
                                        <li><a href="#">Custom Fonts</a></li>
                                        <li><a href="#">Slide down on Hover</a></li>
                                    </ul>
                                </li>

                                <li class="col-sm-2">
                                    <ul>
                                        <li class="dropdown-header">Much more</li>
                                        <li><a href="#">Easy to Customize</a></li>
                                        <li><a href="#">Calls to action</a></li>
                                        <li><a href="#">Custom Fonts</a></li>
                                        <li><a href="#">Slide down on Hover</a></li>
                                    </ul>
                                </li>
                                <div class="divider"></div>
                            </ul>   {{-- ul- mega-drop-down-class--}}
                        </li>      {{--li- mega-drop-down-class--}}

                        <li><a href="/book-upload">Book Upload</a></li>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="#">Sign in</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-search"></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" style="min-width: 300px;">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="navbar-form navbar-left" role="search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" />
                                                    <span class="input-group-btn">
                                                         <button class="btn btn-primary" type="button" style="background-color: #01579B !important;"> Go!</button>
                                                         </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  <!--end row-->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container-fluid big-logo-row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 big-logo-container">
                        <h1 class="big-logo img-responsive" style="color: transparent !important;">IT E-Library</h1>
                    </div><!--/.col-xs-12 -->
                </div><!--/.row -->
            </div><!--/.container -->
        </div><!--/.container-fluid -->
    </header>



    @yield('content')

    <div class="footer-section">
        <div class="container">
            <div class="footer-four-columns">
                <div class="col-md-3 footer-column">
                    <h4>About </h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>
                <div class="col-md-3 footer-column">
                    <h4>Property Types</h4>
                    <p>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    </p>
                </div>
                <div class="col-md-3 footer-column">
                    <h4>Useful links</h4>
                    <p>
                    <li><a href="/home-page">Home</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="/book-upload">Book Upload</a></li>
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="#">Sign in</a></li>

                    </p>
                </div>
                <div class="col-md-3 footer-column">
                    <h4>Contacts</h4>
                    <p>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 234 567 </li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="#"> Lalala@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> Rupp, Phnom Penh</li>
                    <li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sun 8:00 am to 8:00 pm</li>
                    </p>
                    <p><ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer-text-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="txt-footer-bottom-left text-left">
                        <h5> @All Right Reserved 2017-2018</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="txt-footer-bottom-right text-right">
                        <h5> Developed by Team Web Development</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>   <!--end main full page-->
</body>
</html>




<script>

    //    >>>>>>>>>>>>>>>>>>>header<<<<<<<<<<<<<<<<<

    var navbarHeight = $('.navbar').height();

    $(window).scroll(function() {
        var navbarColor = "13, 71, 161"//color attr for rgba
        var smallLogoHeight = $('.small-logo').height();
        var bigLogoHeight = $('.big-logo').height();

        var smallLogoEndPos = 0;
        var smallSpeed = (smallLogoHeight / bigLogoHeight);

        var ySmall = ($(window).scrollTop() * smallSpeed);

        var smallPadding = navbarHeight - ySmall;
        if (smallPadding > navbarHeight) { smallPadding = navbarHeight; }
        if (smallPadding < smallLogoEndPos) { smallPadding = smallLogoEndPos; }
        if (smallPadding < 0) { smallPadding = 0; }

        $('.small-logo-container ').css({ "padding-top": smallPadding});

        var navOpacity = ySmall / smallLogoHeight;
        if  (navOpacity > 1) { navOpacity = 1; }
        if (navOpacity < 0 ) { navOpacity = 0; }
        var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
        $('.navbar').css ({"background-color": navBackColor});

        var shadowOpacity = navOpacity * 0.4;
        if ( ySmall > 1) {
            $('.navbar').css({"box-shadow": "0 2px 3px rgba(78,23,77," + shadowOpacity + ")"});
        } else {
            $('.navbar').css({"box-shadow": "none"});
        }
    });

    //mega_menu

    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("1000");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("1000");
                $(this).toggleClass('open');
            }
        );
    });
    //    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>end-Header


</script>

</body>

</html>


