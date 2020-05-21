@extends('index')
@section('styles')

    <style>

    </style>

@stop



@section('content')
    <div class="div container-fluid logo col-md-12   "style="overflow-x: hidden; ">
        <div class="row col-md-12 col-sm-6 " >
            <img  class="upper-logo" src="{{asset('front_assets/upper_logo.png')}}" alt="">
        </div>

        <div class="row col-md-12 col-md-offset-2">
            <img class="middel" style=
            "" src="{{asset('front_assets/middel_logo.png')}}" alt="">
        </div>
        <div class="row col-md-12 col-md-offset-1">

            <img class="middel-text"  src="{{asset('front_assets/middel_text.png')}}" alt="">

        </div>
        <div class="row col-md-12 col-md-offset-1">
            <a href="{{route('login')}}">
                <img style="" class="start"  src="{{asset('front_assets/start_btn.png')}}" alt=""></a>

        </div>

        <div class="row col-md-12 col-md-offset-1">
            <img class="lower-text" src="{{asset('front_assets/lower_text.png')}}" alt="">
        </div>


    </div>

@stop



@section('script')

@stop
