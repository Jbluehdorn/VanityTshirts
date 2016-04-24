@extends('layouts.app')

@section('content')
    <style>
        .employee-img {
            height: 150px;
        }
    </style>
    <div class="container">
        <h1>{{$emp->firstName}} {{$emp->lastName}} - {{$emp->position}}</h1>
        <div class="col-xs-2">
            <img src="{{URL::to('/')}}/{{$emp->picture}}"
                 alt="Photo of {{$emp->firstName}} {{$emp->lastName}}"
                 class="img-thumbnail employee-img" />
        </div>
        <div class="col-xs-10">
            <strong>{{$emp->motto}}</strong>
            <br/>
            <p>{{$emp->bio}}</p>
            <br />
            <strong>Email: </strong><a href="mailto:{{$emp->email}}">{{$emp->email}}</a>
        </div>
    </div>
@stop