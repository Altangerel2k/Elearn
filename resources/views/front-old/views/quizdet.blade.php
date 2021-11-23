@extends('front.layout')

@section('main')



        <section>
            <div class="container pb-0">
                <div class="row text-center">

                    <div class="col-sm-4">
                        <div class="icon-box iconbox-border iconbox-theme-colored p-40">
                            {{--<a href="#" class="icon icon-gray icon-bordered icon-border-effect effect-flat">--}}
                                {{--<i class="pe-7s-users"></i>--}}
                            {{--</a>--}}
                            <h5 class="icon-box-title">Сорил эхлүүлэх хэсэг</h5>
                            <p>Та доорхи мэдээллийг бөглөж сорилоо эхлүүлнэ үү</p>
                            <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="/quizres/store1">
                                {{ csrf_field() }}
                                <input name="parent_id" type="hidden" value="{{$quiz->id}}"/>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input name="age" class="form-control required" type="number" placeholder="Нас" aria-required="true" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input name="email" class="form-control required email" type="text" placeholder="И-мэйл" aria-required="true" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                           <select class="form-control" name="gender" required>
                                               <option>Эр</option>
                                               <option>Эм</option>
                                           </select>
                                        </div>
                                    </div>


                                </div>

                                <div class="form-group mb-0 mt-20">

                                    <button type="submit" class="btn btn-dark btn-theme-colored">Сорил бөглөх</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h5 class="icon-box-title">{{$quiz->title}}</h5>
                        @if($quiz->about)
                        {!! $quiz->about!!}
                            @else
                            <p>{{$quiz->headline}}</p>
                        @endif
                    </div>

                </div>
            </div>
        </section>


@endsection

@section('script')

@endsection