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
                <h3 class="heading">Немного обо мне</h3>
                <p>Здравствуйте! Меня зовут Кристина Михаловская.</p>
                <p>Я окончила Минский Государственный Лингвистический Университет, факультет Межкультурных коммуникаций по специальности международный туризм. По образованию я переводчик, но, как оказалось, мое призвание - это преподавание.</p>
                <p>Впервые попробовала себя в этой роли со взрослыми студентами из Института повышения квалификации таможенных рабочих. Группа, которую мне дали, полностью состояла из студентов, только начинающих учить язык. После двух месяцев преподавания я поняла - это мое! После этого я и занялась репетиторством.</p>
                <p>На данный момент у меня много студентов разного возраста, начиная с 6 лет и заканчивая 53 годами. У каждого студента свои цели и желания. Именно поэтому с каждым будущим студентом сначала мы проводим собеседование, на котором определяется уровень владения языком и цели его изучения.</p>
                <p>К каждому своему студенту у меня индивидуальный подход. И, конечно, в каждый урок я стараюсь внести что-то новое и интересное, чтобы студент был заинтересован в обучении и получал от него удовольствие. Однако не стоит забывать, что как бы ни старался преподаватель, от него зависит лишь 50% успеха в изучении языка. Остальные 50% зависят только от вас!</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/iam.jpg') }}" class="img-responsive" alt="">
            </div>
        </div>

        <div class="divide60"></div>

        <div class="row">

            <div class="col-md-6 margin20">
                <h3 class="heading">Варианты занятий</h3>
                <div class="panel-group" id="accordion">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-user"></i>Индивидуальные занятия
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Занятие длится 90 минут со взрослыми и подростками и 60 минут с детьми (до 6 класса включительно). <br />75% времени на занятии отводится словарной и грамматической работе. 25% - видео, аудирование, чтение. На первых занятиях со взрослыми проводится анализ урока, обсуждаются плюсы и минусы, проблемные места. С детьми - игры.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="fa fa-group"></i>Групповые занятия
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Занятие длится 90 минут. Максимальное количество студентов - 4 человека.<br />60% времени занятия отодится на словарную и грамматическую работу. 20% - видео, аудирование, чтение. 20% - устная речь.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 margin20">
                <h3 class="heading">Преимущества работы со мной</h3>

                <ul class="list-unstyled highlight-list">
                    <li><i class="fa fa-check"></i>Индивидуальный подход</li>
                    <li><i class="fa fa-check"></i>Занятия в любое время дня</li>
                    <li><i class="fa fa-check"></i>Занятия у Вас на дому</li>
                    <li><i class="fa fa-check"></i>Современные методы обучения</li>
                    <li><i class="fa fa-check"></i>Новейшие учебные материалы</li>
                </ul>
            </div>
        </div>

    </div>

    <div class="divide60"></div>
@stop