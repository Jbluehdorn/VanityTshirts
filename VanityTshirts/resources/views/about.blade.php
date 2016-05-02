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
                                <p>{{$employee->email}}</p>
                            </div>
                        </div><!--end media-->
                    </div>
                @endforeach
<!--            <div class="col-md-6">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{asset('images/default.png')}}" alt="Employee photo">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Employee of the Month</h4>
                            Here is some useless information about this employee. Lorem ipsum dolor sit amet, 
                            commune accumsan quaestio eos ut, ex est oratio persequeris. Cetero sanctus eu vim, 
                            idque efficiendi mediocritatem et nec.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{asset('images/default.png')}}" alt="Employee photo">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Inigo Montoya</h4>
                            Here is some useless information about this employee. Lorem ipsum dolor sit amet, 
                            commune accumsan quaestio eos ut, ex est oratio persequeris. Cetero sanctus eu vim, 
                            idque efficiendi mediocritatem et nec. 
                        </div>
                    </div>end media
                </div>
                <div class="col-md-6">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{asset('images/default.png')}}" alt="Employee photo">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Pedro Hernandez</h4>
                            Here is some useless information about this employee. Lorem ipsum dolor sit amet, 
                            commune accumsan quaestio eos ut, ex est oratio persequeris. Cetero sanctus eu vim, 
                            idque efficiendi mediocritatem et nec. 
                        </div>
                    </div>end media
                </div>
                <div class="col-md-6">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{asset('images/default.png')}}" alt="Employee photo">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Achmed the Terrorist</h4>
                            Here is some useless information about this employee. Lorem ipsum dolor sit amet, 
                            commune accumsan quaestio eos ut, ex est oratio persequeris. Cetero sanctus eu vim, 
                            idque efficiendi mediocritatem et nec. 
                        </div>
                    </div>end media
                </div>-->
            </div><!--end row-->
        </div>
    </div><!--end row-->
</div>
@endsection