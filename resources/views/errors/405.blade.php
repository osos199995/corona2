@extends('index')
@section('styles')
    <style>

    </style>
@stop



@section('content')
  <div>
      <div class="row col-md-12  col-md-offset-5">
          <img class="login-middel" style="
            width: 250px;
            height:250px;
            margin-top:10px;" src="{{asset('front_assets/middel_logo.png')}}" alt="">
      </div>
      <div class="row col-md-12  col-md-offset-5">
          <p>لا يمكنك مقاطعة الاسئلة باعادة تحميل الصفحة بالرجاء الرجوع للبداية</p>
          {!! Form::open(['method'=>'get','action'=>['QuestionsController@End'],'files'=>true])  !!}
          <button class="btn btn-danger pug " style="width: 20%;" type="submit">خروج</button>
          {!!  form::close() !!}
      </div>

  </div>
@stop



@section('script')

@stop
