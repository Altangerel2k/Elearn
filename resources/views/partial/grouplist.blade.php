@if($group->childs!='')
    <ul class="todo-list" style="margin-left:30px;">
        <li>
            <a href="/creategroup/{{$group->id}}" ><i class="fa fa-plus"></i>
                <span class="m-l-xs" style="color:red">Цэс нэмэх</span>
            </a>
        </li>
        @foreach($group->childs()->orderBy('orderby', 'ASC')->get() as $child)

            <li style="height: 55px">
                <a href="/showgroup/{{$child->id}}"><span class="badge-info" style="padding-left: 5px; padding-right: 5px;">{{$child->orderby}}</span>
                    <span class="m-l-xs">{{$child->name}}</span>
                </a>
                <br/>
                <a href="/deletegroup/{{$child->id}}" class="pull-right"><span class="label label-danger" style="margin-left:3px;">Устгах</span></a>
                <a href="/editgroup/{{$child->id}}" class="pull-right"><span class="label label-warning">Засах</span></a>
                <span class="pull-right" class="label label-warning"> &nbsp;{{$child->language}}</span>
                <span class="pull-right" class="label label-warning">{{$child->type}}&nbsp;|</span>
            </li>
            @include('partial.grouplist',['group'=>$child])
        @endforeach
    </ul>
@else
    <ul class="todo-list small-list" style="margin-left:30px;">
        <li>
            <a href="/creategroup/{{$group->id}}" ><i class="fa fa-plus"></i>
                <span class="m-l-xs" style="color:red">Цэс нэмэх</span>
            </a>
        </li>
    </ul>
@endif