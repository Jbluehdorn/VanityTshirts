@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Welcome</h1></div>

<!--                <div class="panel-body">
                    Your Application's Landing Page.
                </div>-->
            </div>
            <img src="{{asset('img/store.png')}}" alt="Vanity Tshirts store" class="img-responsive img-rounded img-thumbnail">            
        </div>
    </div>
</div>
@endsection