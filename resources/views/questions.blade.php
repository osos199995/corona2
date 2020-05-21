@extends('index')
@section('styles')
    <style>

    </style>
@stop



@section('content')
    @if ($question->id <= 19)
        <div class="row col-md-12 col-md-offset-0 result-show " style="overflow-x: hidden;">
            <h2>النتيجة</h2>

            @if ($question->id == 1)
                <p style=" font-size: 30px;"> 0 </p>
            @else
                <p style=" font-size: 30px;"> {{$state->count * 10}} </p>
            @endif

        </div>


    @endif

    @if ($question->id <= 19)
        {!! Form::open(['method'=>'post','action'=>['QuestionsController@Answers',$question->id],'files'=>true])  !!}

        <div class="list-group col-md-12 "  style="float: left; margin-left:30%; margin-top: 10%; width:40%; text-align: right;} ">
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @elseif(Session::has('danger'))
                <div    class="alert alert-danger">{{ Session::get('danger') }}</div>
            @endif
            <a  href="#" class="list-group-item active question" > {{$question->question}} <span class="span" style="float: left">(السؤال:{{$question->id}})</span>  </a>

            <div class="row " id="list" style="width: 20%; float:right; margin-right:10%; margin-top: 10%; border-width: thick; border-color: blue; " >
                  @if ($question->answer1)
                    <a href="#"  style="" class="list-group-item answers-right "><input type="radio"  name="answer" required value="{{$question->answer1}}" > {{$question->answer1}} </a>

                  @endif
               @if ($question->answer2)
                   <a href="#" style="" class="list-group-item answers-right "> {{$question->answer2}} <input class="green"  type="radio" required  name="answer" value="{{$question->answer2}}"></a>

               @endif

            </div>
            <div class="row green"  style="width: 20%; float:right; margin-right:30%; margin-bottom: 10%;  margin-top: 10%; ">
              @if ($question->answer3)
                    <a href="#" style=""  class="list-group-item answers-left"> {{$question->answer3}} <input type="radio"  required name="answer" value="{{$question->answer3}}"></a>

                @endif
              @if ($question->answer4)
             <a href="#" style=" " class="list-group-item answers-left"> {{$question->answer4}} <input type="radio"  required name="answer" value="{{$question->answer4}}"></a>

                  @endif


                  <div class="row col-md-12 col-md-offset-0 next ">
                      <button class="btn btn-primary next " style="" type="submit">التالى</button>
                   </div>

        </div>

        </div>

        {!!  form::close() !!}
    @endif
    @if ($question->id > 19)


    @if ($state->count >=10 )

            <div class="container  win" style="overflow-x: hidden; align-content: center;">
                <div class="row col-md-12 col-md-push-5">
                    <img style="" class="win-next"  src="{{asset('front_assets/win_text_1.png')}}" alt=""></a>
                    <h2 class="win-name" style="">{{\Illuminate\Support\Facades\Session::get('user_name')}}</h2>
                </div>
                <div class="row col-md-12 col-md-push-5">
                    <a href="{{route('questions2',[$question->id])}}">
                        <img style="" class="next"  src="{{asset('front_assets/win_text_2.png')}}" alt=""></a>

                </div>

                <div class="row col-md-12 col-md-push-6 win-result">
                    <h2 style="color: yellow";>درجتك</h2>
                    <span style=" font-size: 30px;">   {{$state->count * 10}}</span>

                </div>
                {!! Form::open(['method'=>'get','action'=>['QuestionsController@End'],'files'=>true])  !!}
                <button class="btn btn-primary" style="width:20%; margin-left: 35%; margin-top: 15%; " type="submit">خروج</button>
                {!!  form::close() !!}
            </div>

    @elseif (  $state->count <= 10 )

        <div class="container  los" style="overflow-x: hidden;">
            <div class="row col-md-12 col-md-push-5">
                <img  class='los-text'style="
                " class="next"  src="{{asset('front_assets/lose_text1.png')}}" alt=""></a>
                <h2 class="los-name" style="">{{\Illuminate\Support\Facades\Session::get('user_name')}}</h2>
            </div>
            <div class="row col-md-12 col-md-push-5">
                <a href="{{route('questions2',[$question->id])}}">
                    <img style="" class="los-next"  src="{{asset('front_assets/lose_text2.png')}}" alt=""></a>

            </div>

            <div class="row col-md-12 col-md-push-6 los-result"  style="">
                <h2 style="color: yellow";>درجتك</h2>
                <span style=" font-size: 30px; margin-left: 40%;">   {{$state->count * 10}}</span>


            </div>
            {!! Form::open(['method'=>'get','action'=>['QuestionsController@End'],'files'=>true])  !!}
            <button class="btn btn-primary" style="width:20%; margin-left: 35%; margin-top: 15%; " type="submit">خروج</button>
            {!!  form::close() !!}
        </div>

    @endif

    @endif
@stop

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

@section('script')

@stop
