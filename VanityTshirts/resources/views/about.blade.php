@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>About Us</h1>
                </div>
                
                <div class="panel-body">
                    Employee directory...                    
                </div>
            </div><!--end panel-->
        
            <div class="row">
                @foreach($employees as $employee)
                    <div class="col-lg-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{URL::to('/')}}/{{$employee->picture}}" alt="{{$employee->firstName}} {{$employee->lastName}}">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">{{$employee->firstName}} {{$employee->lastName}} - {{$employee->position}}</h3>
                                <h4>{{$employee->motto}}</h4>
                                <p>{{$employee->bio}}</p>
                                <p><a href="">{{$employee->email}}</a></p>
                            </div>
                        </div><!--end media-->
                    </div>
                @endforeach
            </div><!--end row-->
        </div>
    </div><!--end row-->
</div>
@endsection