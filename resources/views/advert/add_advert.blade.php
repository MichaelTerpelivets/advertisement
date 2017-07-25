@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Создайте обьявление</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form action="{{route('adverts.store')}}" method="POST" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group"><label class="col-sm-2 control-label">Название</label>

                                <div class="col-sm-10"><input type="text" name="title" class="form-control" required></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Описание</label>

                                <div class="col-sm-10"><textarea name="description" class="form-control"></textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary" type="submit">Создать</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection