@extends('index')
@section('styles')
    <style>

    </style>
@stop



@section('content')
    <div class="div container-fluid  " style="margin-top: 100px; width:100%; overflow-x: hidden;">

        <div class="row col-md-12  col-md-offset-5">
            <img class="login-middel" style="
            width: 250px;
            height:250px;
            margin-top:10px;" src="{{asset('front_assets/middel_logo.png')}}" alt="">
        </div>
        <div class="row col-md-12   col-md-offset-5">
            <img width="20%" class="login-name"  src="{{asset('front_assets/name.png')}}" alt="">

        </div>

        <div class="row col-md-12 form  col-md-offset-5 ">
            {!! Form::open(['method'=>'post','action'=>['QuestionsController@start',0],'files'=>true]) !!}
            <input style="width: 20%" type="text" name="user_name"  value="" class="form-control" placeholder='اكتب اسمك'>
            @if ($errors->has('user_name'))
                <div style="width: 20%;" class="alert alert-danger">{{ $errors->first('user_name') }}</div>
            @endif
            <button class="btn btn-primary " type="submit" style="width: 20%; ">ابدا</button>
            {!! form::close() !!}
        </div>
        <a class="row col-md-12   col-md-offset-5">

{{--         <a  style="margin-left: 43%;" href="{{route('firstquestion',['0'])}}">  <img width="20%"  src="{{asset('front_assets/start.png')}}" alt=""></a>--}}

    </div>
    </div>
@stop



@section('script')

@stop
