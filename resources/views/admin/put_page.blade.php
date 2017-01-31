@extends('admin.admin')

@section('content')
    <form class="form-horizontal" role="form" method="POST"  action="{{URL::route('put_pgae')}}">
        {{ csrf_field() }}
        <div class="form-group text-center">

            <label for="title" class=" col-md-12 text-center ">Название статьи</label><br>
            <div class="col-md-6 col-md-offset-3">

                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

            </div>
        </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        <div class="form-group">

            <label for="title" class=" text-center col-md-12 text-center">Описание статьи</label><br>
            <div class="col-md-6 col-md-offset-3">
                <textarea class="form-control" name="descrip" id="" cols="30" rows="10"></textarea>

            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Сохранить
                </button>

        </div>
        </div>
            <div class="clearfix"></div>
    </form>
@endsection