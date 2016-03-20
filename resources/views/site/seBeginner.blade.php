@extends('layouts.wrap')
@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>English for Travel</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>English for Travel</li>
                        <li>Beginner</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 margin20">
                <h3 class="heading">Better Services Provide by us</h3>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni. Dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                </p>
                <p><a href="#" class="btn btn-theme-bg">Hire us</a></p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/showcase-1.jpg') }}" class="img-responsive" alt="">
            </div>
        </div><!--about intro-->
    </div>
    <div class="divide60"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Our Services</h3>
            </div>
        </div>
        <div class="row special-feature">
            <div class="col-md-3 col-sm-6 margin20">
                <div class="s-feature-box text-center">
                    <div class="mask-top">
                        <!-- Icon -->
                        <i class="fa fa-heart-o"></i>
                        <!-- Title -->
                        <h4>Made with love</h4>
                    </div>
                    <div class="mask-bottom">
                        <!-- Icon -->
                        <i class="fa fa-heart-o"></i>
                        <!-- Title -->
                        <h4>Made with love</h4>
                        <!-- Text -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</p>
                    </div>
                </div>

            </div><!--services col-->
            <div class="col-md-3 col-sm-6 margin20">
                <div class="s-feature-box text-center">
                    <div class="mask-top">
                        <!-- Icon -->
                        <i class="fa fa-laptop"></i>
                        <!-- Title -->
                        <h4>Ultra Responsive</h4>
                    </div>
                    <div class="mask-bottom">
                        <!-- Icon -->
                        <i class="fa fa-laptop"></i>
                        <!-- Title -->
                        <h4>Ultra Responsive</h4>
                        <!-- Text -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</p>
                    </div>
                </div>
            </div><!--services col-->
            <div class="col-md-3 col-sm-6 margin20">
                <div class="s-feature-box text-center">
                    <div class="mask-top">
                        <!-- Icon -->
                        <i class="fa fa-code"></i>
                        <!-- Title -->
                        <h4>Clean &amp; valid design</h4>
                    </div>
                    <div class="mask-bottom">
                        <!-- Icon -->
                        <i class="fa fa-code"></i>
                        <!-- Title -->
                        <h4>Clean &amp; valid design</h4>
                        <!-- Text -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</p>
                    </div>
                </div>
            </div><!--services col-->
            <div class="col-md-3 col-sm-6 margin20">
                <div class="s-feature-box text-center">
                    <div class="mask-top">
                        <!-- Icon -->
                        <i class="fa fa-cogs"></i>
                        <!-- Title -->
                        <h4>Free Support &amp; Updates</h4>
                    </div>
                    <div class="mask-bottom">
                        <!-- Icon -->
                        <i class="fa fa-cogs"></i>
                        <!-- Title -->
                        <h4>Free Support &amp; Updates</h4>
                        <!-- Text -->
                        <p>Assan Release the updates time to time. more big updates are coming in future. keep in touch and and enjoy all updates free of cost. </p>
                    </div>
                </div>
            </div><!--services col-->
        </div>
        <div class="divide70"></div>
        <div class="row">
            <div class="col-md-4 margin20">
                <div class="services-box wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="services-box-icon">
                        <i class="fa fa-pencil"></i>
                    </div><!--services icon-->
                    <div class="services-box-info">
                        <h4>Web &AMP; Graphics Design</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                        </p>
                    </div>
                </div><!--services box-->
            </div><!--services col-->
            <div class="col-md-4 margin20">
                <div class="services-box wow animated fadeInUp" data-wow-delay="0.2s">
                    <div class="services-box-icon">
                        <i class="fa fa-globe"></i>
                    </div><!--services icon-->
                    <div class="services-box-info">
                        <h4>Web Development</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                        </p>
                    </div>
                </div><!--services box-->
            </div><!--services col-->
            <div class="col-md-4 margin20">
                <div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="services-box-icon">
                        <i class="fa fa-users"></i>
                    </div><!--services icon-->
                    <div class="services-box-info">
                        <h4>Customer Support</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                        </p>
                    </div>
                </div><!--services box-->
            </div><!--services col-->
        </div><!--services row-->
        <div class="divide30"></div>
        <div class="row">
            <div class="col-md-4 margin20">
                <div class="services-box wow animated fadeInUp" data-wow-delay="0.4s">
                    <div class="services-box-icon">
                        <i class="fa fa-crop"></i>
                    </div><!--services icon-->
                    <div class="services-box-info">
                        <h4>Pixel perfect design</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                        </p>
                    </div>
                </div><!--services box-->
            </div><!--services col-->
            <div class="col-md-4 margin20">
                <div class="services-box wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="services-box-icon">
                        <i class="fa fa-twitter"></i>
                    </div><!--services icon-->
                    <div class="services-box-info">
                        <h4>BOOTSTRAP 3.3.6</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                        </p>
                    </div>
                </div><!--services box-->
            </div><!--services col-->
            <div class="col-md-4 margin20">
                <div class="services-box wow animated fadeInUp" data-wow-delay="0.6s">
                    <div class="services-box-icon">
                        <i class="fa fa-flag"></i>
                    </div><!--services icon-->
                    <div class="services-box-info">
                        <h4>Font Awesome icons</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.

                        </p>

                    </div>
                </div><!--services box-->
            </div><!--services col-->
        </div><!--services row-->
    </div><!--.container-->
    <div class="divide60"></div>

@stop