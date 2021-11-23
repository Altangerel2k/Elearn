@extends('layouts.app')
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <h1>
            Шинээр сорилын асуулт нэмэх хэсэг
        </h1>
        <a href="{!!url('qlist')!!}/{{$id}}" class='btn btn-danger'><i class="fa fa-home"></i>Буцах</a>
        <br>
        <br/>
        <form method='POST' action='{!!url("questionlist/store")!!}'>
            {{ csrf_field() }}
            <input type="hidden" value="{{$id}}" name="parent_id"/>
            <div class="form-group">
                <label for="question">Асуулт</label>
                <input id="question" name="question" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Тайлбар</label>
                <textarea id="description" name="description" type="text" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="type">Төрөл</label>

                <select name="type" class="form-control">
                    <option value="0">Зөвхөн нэгийг сонгох</option>
                    <option value="1">Олныг сонгох боломжтой</option>
                </select>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    Хариултууд
                </div>
                <div class="panel-body" id="mbanswersparent">
                    <table class="table table-hover margin bottom">
                        <thead>
                        <tr>
                            <th style="width: 1%" class="text-center">No.</th>
                            <th class="text-center">Хариулт</th>
                            {{--<th style="width: 10%" class="text-center">Дараалал</th>--}}
                            <th style="width: 10%" class="text-center">Оноо</th>
                            <th class="text-center" style="width:5%;">Үйлдэл</th>
                        </tr>
                        </thead>
                        <tbody id="mbanswers">

                        </tbody>
                    </table>

                    <div style="border: 1px #cccccc dotted; padding: 30px; margin: 30px;" class="row">

                    <div class="form-group col-lg-8">
                        <label for="question">Хариултаа бичих</label>
                        <input id="mbqname" type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="question">Хариултын оноог оруулах</label>
                        <input id="mbqpoint" type="text" value="0" class="form-control">
                    </div>
                        <div class="form-group col-lg-12">
                            <a class="btn btn-warning " href="javascript:addanswer()"><i class="fa fa-plus"></i>&nbsp;Шинэ
                                хариулт оруулах</a>
                        </div>


                    <textarea style="display: none" id="answers" name="answers" type="text" class="form-control"></textarea>

                    </div>
                </div>
            </div>

            <button class='btn btn-success' type='submit'><i class="fa fa-floppy-o"></i> Хадгалах</button>
        </form>
    </div>
@endsection
@section('script')
    <script>
        var answers = [];//[{name:'Хариулт 1',score:1},{name:'Хариулт 2',score:0}];
        function load() {
            $('#mbanswers').html('');
            if (answers == []) {
                $('#mbanswers').html('<tr><td colspan="5" class="text-center">Хариултаа нэмнэ үү</td></tr>');
            } else {
                $.each(answers, function (i) {

                    $('#mbanswers').append('<tr><td class="text-center">' + answers[i].id + '</td><td class="text-center">' + answers[i].name + '</td><td class="text-center">' + answers[i].score + '</td><td class="text-center"><a class="btn btn-danger" href="javascript:deleteanswer(' + answers[i].id + ')">Устгах</a></td></tr>');
                    console.log(answers[i]);
                });
            }
        }

        load();

        function mbisnull(v) {
            // alert(v);
            if (v.replace(" ", "") == "") {
                return false;
            }
            return true;
        }

        function addanswer() {
            if (mbisnull($('#mbqname').val())) {
                answers.push({'id': answers.length + 1, 'name': $('#mbqname').val(), 'score': $('#mbqpoint').val()});
                $('#answers').val(JSON.stringify(answers));
                $('#mbqname').val('');
                $('#mbqpoint').val(0);

                console.log(answers);
                load();
            }
            else {
                alert('Асуулт хоосон байж болохгүй');
            }
        }

        function deleteanswer(id) {
            if (confirm('Энэ хариултыг устгахдаа итгэлтэй байна уу?')) {

                var found = -1;
                for (var i = 0; i < answers.length; i++) {
                    if (answers[i].id = id) {
                        found = i;
                    }
                }
                if (found != -1) {
                   answers.splice(found-1,1);
                    for (var i = 0; i < answers.length; i++) {
                        answers[i].id =i+1;
                    }
                   load();
                    $('#answers').val(JSON.stringify(answers));
                }
            }
        }
    </script>
@endsection