@extends('layouts.app')

@section('content')
    <ul>
    @foreach($groups as $group)
        <li> <a href="/showgroup/{{$group->id}}"> {{$group->name}}</a></li>
        @endforeach
    </ul>
    @endsection