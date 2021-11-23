@extends('front.layout')

@section('main')

<script>
    var answers=[];
</script>

        <section>
            <div class="container pb-0">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="icon-box iconbox-border iconbox-theme-colored p-40">
                            {{--<a href="#" class="icon icon-gray icon-bordered icon-border-effect effect-flat">--}}
                                {{--<i class="pe-7s-users"></i>--}}
                            {{--</a>--}}
                            <h5 class="icon-box-title text-center">{{$quiz->title}}</h5>
                            <p class="text-center">Та доорхи сорилыг бөглөж хариултыг харна уу</p>

                            <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="/quizres/store1">
                                {{ csrf_field() }}

                                <div class="row">

                                    @foreach($quiz->childs()->get() as $question)
                                        <div class="col-lg-6" style="min-height: 400px;">
                                        <article class="post clearfix mb-30 pb-30">
                                            <div class="entry-content border-1px p-20 pr-10">
                                                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                                    <div class="media-body pl-15">
                                                        <div class="event-content pull-left flip">
                                                            <h4 class="entry-title text-white text-uppercase m-0"><a href="#">{{$question->questionname}}</a></h4>
                                                            @if($question->desc)
                                                                <span class="mb-10 text-gray-darkgray mr-10 font-13"> {{$question->desc}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="">
                                                    @php
                                                        $ans=json_decode(unserialize($question->answers),true);
                                                    @endphp
                                                    <script>
                                                        answers.push({'id':'{{$question->id}}','question':'{{$question->questionname}}','score':0,'check':0,'answer':''});
                                                    </script>
                                                    @php
                                                    $ind=0;
                                                    @endphp
                                                    @foreach($ans as $an)
                                                        @php
                                                        $ind++;
                                                        @endphp
                                                        <li class="list-group-item text-left">
                                                            <input
                                                                    @if($question->type==0)
                                                                    type="radio"
                                                                    @else
                                                                    type="checkbox"
                                                                    @endif
                                                                    value="{{$an['score']}}" name="q_{{$question->id}}" class="i-checks" id="q_{{$question->id}}_{{$ind}}"
                                                                    {{--onchange="alert({{$an->name}})"--}}
                                                            />
                                                            <span class="m-l-xs" id="q_{{$question->id}}_{{$ind}}_val">{{$an['name']}} </span>

                                                        </li>
                                                    @endforeach
                                                </ul>

                                            </div>
                                        </article>
                                        </div>
                                    @endforeach
                                        <script>
                                            console.log('ANSWERS:',answers);
                                        </script>

                                </div>

                                <div class="form-group mb-0 mt-20">
                                    <a href="javascript:checkResult()"  class="btn btn-dark btn-theme-colored">Хариулт шалгах</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="rescont" class="col-lg-4 bg-theme-colored mdquizresult text-center hidden" style="padding: 30px; margin-bottom: 30px;">
                        <h2 class="icon-box-title text-white">Хариулт</h2>
                        <hr/>
                        <h3 class="icon-box-title text-white">Таны авсан оноо: </h3>
                        <h1 class="icon-box-title text-white" style="border:1px #ffffff dotted; padding: 30px;" id="respoint"> 45</h1>
                    </div>
                    <div class="col-lg-8 mdquizresult hidden"  style="margin-bottom: 30px;">
                        {!!  $quiz->result_text!!}
                    </div>


                </div>
            </div>
        </section>


@endsection

@section('script')
    <script>
function checkResult()
{
    var cancalculate=true;
    var totalpoint=0;
    $.each(answers,function(index,value)
    {
        console.log(value);
        if($("input[name=q_"+value.id+"]:checked").val())
        {
            $.each($("input[name=q_"+value.id+"]:checked"),function(i,v){
                totalpoint=totalpoint+parseInt($(v).val());
                answers[index].score=answers[index].score+parseInt($(v).val());
                answers[index].answer=answers[index].answer+$("#"+$(v).attr('id')+"_val").html()+',';
            });


        }
        else{
            cancalculate=false;
        }
    });
    if(cancalculate)
    {

        $('#respoint').html(totalpoint);
        $('.mdquizresult').removeClass('hidden');
        window.location.hash = '#rescont';
        console.log('answers:', answers);

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/quiz/resultajax',
            type: 'POST',
            data: {_token: CSRF_TOKEN, _data:answers,_total:totalpoint, _resid:{{$res->id}}},
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
            }
        });

    }
    else{
        alert('Сонгоогүй асуултууд байна. Сонгоно уу');
    }
}
    </script>

@endsection