@extends('layouts.app')

@section('content')
    <!-- БАННЕР НА ГЛАВНОЙ -->
    <section class="banner">
        <div class="container">
            <h1>Сайт для обьявлений</h1>
            <p>Данный сайта сайт выведет Ваше в ТОП</p>
            @if(Auth::check())
                <button class="btn">Создать обьявление >></button>
            @endif
        </div>
    </section>
    <!-- ПОПУЛЯРНЫЕ ПРОЕКТЫ -->
    <section class="popular">
        <div class="container">
            <header>Обьявления</header>
            <div class="row">
                <div class="col-md-4">
                    <div class="item thumbnail">
                        <img src="{{asset('images/front/pexels-photo-442150.jpeg')}}" height="200" width="600"/>
                        <h3>Название проекта</h3>
                        <div class="description">Краткое описание проекта</div>
                        <author>Автор: <a href="#">DarthCoder</a></author>
                        <div class="category">
                            Категория
                        </div>
                        <div class="city">
                            Город
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>40%</b>
                                <br/>
                                Прогресс
                            </div>
                            <div class="col-md-4">
                                <b>590 грн.</b>
                                <br/>
                                Сумма
                            </div>
                            <div class="col-md-4">
                                <b>16 часов</b>
                                <br/>
                                Осталось
                            </div>
                        </div>
                    </div>
                    <div class="item thumbnail">
                        <img src="{{asset('images/front/pexels-photo-442150.jpeg')}}" height="200" width="600"/>
                        <h3>Название проекта</h3>
                        <div class="description">Краткое описание проекта</div>
                        <author>Автор: <a href="#">DarthCoder</a></author>
                        <div class="category">
                            Категория
                        </div>
                        <div class="city">
                            Город
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>40%</b>
                                <br/>
                                Прогресс
                            </div>
                            <div class="col-md-4">
                                <b>590 грн.</b>
                                <br/>
                                Сумма
                            </div>
                            <div class="col-md-4">
                                <b>16 часов</b>
                                <br/>
                                Осталось
                            </div>
                        </div>
                    </div>
                    <div class="item thumbnail">
                        <img src="{{asset('images/front/pexels-photo-442150.jpeg')}}" height="200" width="600"/>
                        <h3>Название проекта</h3>
                        <div class="description">Краткое описание проекта</div>
                        <author>Автор: <a href="#">DarthCoder</a></author>
                        <div class="category">
                            Категория
                        </div>
                        <div class="city">
                            Город
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>40%</b>
                                <br/>
                                Прогресс
                            </div>
                            <div class="col-md-4">
                                <b>590 грн.</b>
                                <br/>
                                Сумма
                            </div>
                            <div class="col-md-4">
                                <b>16 часов</b>
                                <br/>
                                Осталось
                            </div>
                        </div>
                    </div>
                    <div class="item thumbnail">
                        <img src="{{asset('images/front/pexels-photo-442150.jpeg')}}" height="200" width="600"/>
                        <h3>Название проекта</h3>
                        <div class="description">Краткое описание проекта</div>
                        <author>Автор: <a href="#">DarthCoder</a></author>
                        <div class="category">
                            Категория
                        </div>
                        <div class="city">
                            Город
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>40%</b>
                                <br/>
                                Прогресс
                            </div>
                            <div class="col-md-4">
                                <b>590 грн.</b>
                                <br/>
                                Сумма
                            </div>
                            <div class="col-md-4">
                                <b>16 часов</b>
                                <br/>
                                Осталось
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- НОВЫЕ ПРОЕКТЫ -->
    {{--<section class="new">--}}
    {{--<div class="container">--}}
    {{--<header>Новые проекты</header>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="item thumbnail">--}}
    {{--<img src="{{asset('images/front/pexels-photo-442150.jpeg')}}" height="200" width="600"/>--}}
    {{--<h3>Название проекта</h3>--}}
    {{--<div class="description">Краткое описание проекта</div>--}}
    {{--<author>Автор: <a href="#">Пёсий Царь</a></author>--}}
    {{--<div class="category">--}}
    {{--Категория--}}
    {{--</div>--}}
    {{--<div class="city">--}}
    {{--Город--}}
    {{--</div>--}}
    {{--<div class="progress">--}}
    {{--<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">--}}
    {{--<span class="sr-only">40% Complete (success)</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-4">--}}
    {{--<b>40%</b>--}}
    {{--<br />--}}
    {{--Прогресс--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<b>590 грн.</b>--}}
    {{--<br />--}}
    {{--Собрано--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<b>16 часов</b>--}}
    {{--<br />--}}
    {{--Осталось--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    <!-- БЛОК О ПРОЕКТЕ -->
    <section class="about">
        <div class="container">
            <header class="text-center">Реклама</header>
            <p class="text-center">Вы создаёте мир своими усилиями</p>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-circle" src="{{asset('images/front/drone-sky-camera-remote-465150.jpeg')}}"
                         height="200" width="200"/>
                    <h3>Название</h3>
                    <div class="description">Подробнее</div>
                </div>
                <div class="col-md-4">
                    <img class="img-circle" src="{{asset('images/front/drone-sky-camera-remote-465150.jpeg')}}"
                         height="200" width="200"/>
                    <h3>Название</h3>
                    <div class="description">Подробнее</div>
                </div>
                <div class="col-md-4">
                    <img class="img-circle" src="{{asset('images/front/drone-sky-camera-remote-465150.jpeg')}}"
                         height="200" width="200"/>
                    <h3>Название</h3>
                    <div class="description">Подробнее</div>
                </div>
            </div>
        </div>
    </section>
    <!-- БЛОК С КНОПКОЙ -->
    <section class="make-step">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <header>Почему мы - источник уникальных вещей</header>
                </div>
                <div class="col-md-4 text-right">
                    <button class="btn">О нас</button>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
