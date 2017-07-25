@extends('layouts.app')

@section('content')
    <!-- БАННЕР НА ГЛАВНОЙ -->
    <section class="banner">
        <div class="container">
            <h1>Сайт для обьявлений</h1>
            <p>Вы размещаете рекламу - мы публикуем</p>
            @if(Auth::check())
                <a href="{{route('adverts.create')}}" class="btn">Создать обьявление >></a>
            @endif
        </div>
    </section>
    <!-- ПОПУЛЯРНЫЕ ПРОЕКТЫ -->
    <section class="popular">
        <div class="container">
            <header>Обьявления</header>
            <div class="row">
                    @foreach($adverts as $advert)
                    <div class="col-md-6">
                        <div class="item thumbnail">
                            <img src="{{asset('images/front/o1.jpeg')}}" height="200" width="600"/>
                            <a href="{{route('adverts.show',$advert->id)}}"><h3>{{$advert->title}}</h3></a>
                            <div class="description">{{mb_strimwidth($advert->description,0,100,'...')}}</div>
                            <author>Автор: <a href="#">{{$advert->author->name}}</a></author>
                            <div class="row">
                                {{--<div class="col-md-4">--}}
                                    {{--<b> 40% Просмотров</b>--}}
                                {{--</div>--}}

                            </div>
                        </div>
                </div>
                    @endforeach
            </div>
            <div class="text-center">{{ $adverts->links() }}</div>
        </div>
    </section>

    <!-- НОВЫЕ ПРОЕКТЫ -->
    {{--<section class="new">--}}
    {{--<div class="container">--}}
    {{--<header>Новые проекты</header>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="item thumbnail">--}}
    {{--<img src="{{asset('images/front/o1.jpeg')}}" height="200" width="600"/>--}}
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
            <p class="text-center">Вы создаёте мир своими усилиями. Просто купите эти вещи.</p>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="item">
                        <img class="img-circle" src="{{asset('images/front/rek1.jpg')}}"
                             height="200" width="200"/>
                        <h3>Камера Spaner</h3>
                        <div class="description">Отличное решение для фотографа</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img class="img-circle" src="{{asset('images/front/rek2.jpg')}}"
                             height="200" width="200"/>
                        <h3>Автомобиль Tolofs</h3>
                        <div class="description">Для ценителей китайского качества</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img class="img-circle" src="{{asset('images/front/rek3.jpg')}}"
                             height="200" width="200"/>
                        <h3>Кошелек Genry</h3>
                        <div class="description">Стильный подарок для мужчины</div>
                    </div>
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
                <div class="col-md-4 text-center">
                    <button class="btn">Узнать почему</button>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
