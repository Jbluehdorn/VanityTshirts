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
        </div>
        <div class="col-md-12">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ url:('images/')}}" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                </div>
            </div><!--end media-->
        </div>
    </div><!--end row-->
</div>
@endsection