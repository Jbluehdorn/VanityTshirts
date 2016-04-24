@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Welcome to Vanity Tshirts<br> <small>We have tshirts to fit any need.</small></h1></div>

            </div>
            <div id="carousel" class="carousel slide center-block" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('img/slide1.jpg')}}" alt="Vanity Tshirts Store">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/slide2.jpg')}}" alt="Display Wall">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/slide3.jpg')}}" alt="Custom Designs">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/slide4.jpg')}}" alt="Tshirt colors">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>
@endsection