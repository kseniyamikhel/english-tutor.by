<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English Tutor</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('css/yamm.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/YTPlayer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PC3S67"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PC3S67');</script>
    <!-- End Google Tag Manager -->
    <div class="top-bar-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <ul class="list-inline top-dark-right">
                        <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i> Support@mail.com</li>
                        <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i> +375(29) 178-22-48</li>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i> Login</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa fa-user"></i> Register</a></li>
                        @else
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" >
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('main') }}"><img src="{{ asset('img/logo1.png') }}" alt="English tutor"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="{{ route('testLevel') }}">Test Level</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Levels <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="{{ route('levelBeginner') }}">Beginner </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('levelBeginnerPronunciation') }}"> Pronunciation</a></li>
                                    <li><a href="#"> Grammar</a></li>
                                    <li><a href="{{ route('video') }}"> Video</a></li>
                                    <li><a href="{{ route('audio') }}"> Audio</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="{{ route('levelElementary') }}">Elementary </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Grammar</a></li>
                                    <li><a href="{{ route('video') }}"> Video</a></li>
                                    <li><a href="{{ route('audio') }}"> Audio</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="{{ route('levelIntermediate') }}">Intermediate </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Grammar</a></li>
                                    <li><a href="{{ route('video') }}"> Video</a></li>
                                    <li><a href="{{ route('audio') }}"> Audio</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown">English for Travel <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu multi-level" role="menu">
                            <li><a href="{{ route('seBeginner') }}">Beginner</a></li>
                            <li><a href="{{ route('seElementary') }}">Elementary</a></li>
                            <li><a href="{{ route('seIntermidiate') }}">Intermediate</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">News</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    <footer id="footer">
        <div class="container">

            <div class="row">
                <div class="col-md-4 col-sm-4 margin30">
                    <div class="footer-col">
                        <h3>About</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                        </p>
                        <ul class="list-inline footer-social">
                            <li>
                                <a href="https://www.facebook.com/kristina.lightsunshine" class="social-icon si-dark si-gray-round si-colored-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon si-dark si-gray-round si-colored-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon si-dark si-gray-round si-colored-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 margin30">
                    <div class="footer-col">
                        <h3>Contact</h3>

                        <ul class="list-unstyled contact">
                            <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> vaisahali, jaipur, 302012</p></li>
                            <li><p><strong><i class="fa fa-envelope"></i> Mail:</strong> <a href="#">Support@designmylife.com</a></p></li>
                            <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +91 1800 2345 2132</p></li>
                            <li> <p><strong><i class="fa fa-skype"></i> Skype</strong> assan.856</p></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 margin30">
                    <div class="footer-col">
                        <h3>Ask me a question</h3>

                        <form role="form" class="subscribe-form" action="{{ route('form') }}" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email" name="email" required />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Enter your message" name="question" required></textarea>
                            </div>
                            <div class="form-group">
                                    <span class="input-group-btn">
                                        <button class="success-alert btn btn-theme-dark btn-lg btn-sweet-alert" type="submit">send</button>
                                    </span>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer-btm">
                        <span>&copy;2016. By Kseniya Mikhel</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--easing plugin for smooth scroll-->
<script src="{{ asset('js/jquery.easing.1.3.min.js') }}" type="text/javascript"></script>
<!--sticky header-->
<script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
<!--flex slider plugin-->
<script src="{{ asset('js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
<!--parallax background plugin-->
<script src="{{ asset('js/jquery.stellar.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/jquery.isotope.min.js') }}" type="text/javascript"></script>
<!--digit countdown plugin-->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!--digit countdown plugin-->
<script src="{{ asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
<!--on scroll animation-->
<script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
<!--owl carousel slider-->
<script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
<!--popup js-->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
<!--you tube player-->
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}" type="text/javascript"></script>
<!--image loads plugin -->
<script src="{{ asset('js/jquery.imagesloaded.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/isotope-custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/sweetalert.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $('form.subscribe-form').bind('submit', function(e) {
        e.preventDefault();

        var formData = e.currentTarget.elements;
        var email = formData.email.value;
        var question = formData.question.value;
        var url = e.currentTarget.action;
        var data = {
            email: email,
            question: question
        };

        $.post(url, data)
                .success(function (response) {
                    swal("Good job!", response.message, "success");
                })
                .error(function(xhr) {
                    swal("Error!", xhr.responseJSON.message, "error");
                });
    });
</script>

</body>
</html>
