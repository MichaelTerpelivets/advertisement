@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="wrapper wrapper-content">
            <div class="row ">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h2>Обьявление</h2>
                        </div>
                        <div class="thumb">
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="{{asset('images/front/o1.jpeg')}}">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>{{$advert->author->name}}</strong></h4>
                                <p><i class="fa fa-map-marker"></i> {{$advert->created_at}}</p>
                                <h5>
                                    About me
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                </p>
                                <div class="user-button">
                                    <div class="row">
                                        @if(Auth::check() && $advert->author->id === Auth::user()->id)
                                            <div class="col-md-4">
                                                <a href="{{route('adverts.edit',$advert->id)}}" class="btn btn-success">Редактировать</a>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('adverts.destroy',$advert->id)}}" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div >
                        <div class="ibox-title">
                            <h2>Описание</h2>
                        </div>
                        <div class="thumb">
                            <div>
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">

                                           <p>{{$advert->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection