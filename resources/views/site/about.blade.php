@extends('layouts.wrap')
@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>About Me</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>about me</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 margin20">
                <h3 class="heading">A little about me</h3>
                <p>Здравствуйте! Меня зовут Кристина Михаловская.</p>
                <p>Я окончила Минский Государственный Лингвистический Университет, факультет Межкультурных коммуникаций по специальности международный туризм. По образованию я переводчик, но, как оказалось, мое призвание - это преподавание.</p>
                <p>Впервые попробовала себя в этой роли со взрослыми студентами из Института повышения квалификации таможенных рабочих. Группа, которую мне дали, полностью состояла из студентов, только начинающих учить язык. После двух месяцев преподавания я поняла - это мое! После этого я и занялась репетиторством.</p>
                <p>На данный момент у меня много студентов разного возраста, начиная с 6 лет и заканчивая 53 годами. У каждого студента свои цели и желания. Именно поэтому с каждым будущим студентом сначала мы проводим собеседование, на котором определяется уровень владения языком и цели его изучения.</p>
                <p>К каждому своему студенту у меня индивидуальный подход. И, конечно, в каждый урок я стараюсь внести что-то новое и интересное, чтобы студент был заинтересован в обучении и получал от него удовольствие. Однако не стоит забывать, что как бы ни старался преподаватель, от него зависит лишь 50% успеха в изучении языка. Остальные 50% зависят только от вас!</p>
            </div>
            <div class="col-md-6">
                <img src="img/showcase-1.jpg" class="img-responsive" alt="">
            </div>
        </div>

        <div class="divide60"></div>

        <div class="row">

            <div class="col-md-6 margin20">
                <h3 class="heading">Why hire us?</h3>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-desktop"></i>    100% Responsive Design
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="fa fa-crop"></i>    Pixel Perfect Design
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <i class="fa fa-cogs"></i>    Full Support
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 margin20">
                <h3 class="heading">Our Highlights</h3>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem dolor sit amet ipsum vitae.
                </p>
                <ul class="list-unstyled highlight-list">
                    <li><i class="fa fa-check"></i> Lorem ipsum dollor sit amet</li>
                    <li><i class="fa fa-check"></i> Consectetur adipisicing elit</li>
                    <li><i class="fa fa-check"></i> Lorem ipsum dollor sit amet</li>
                    <li><i class="fa fa-check"></i> Consectetur adipisicing elit</li>
                </ul>
            </div>
        </div>

    </div>

    <div class="divide60"></div>
@stop