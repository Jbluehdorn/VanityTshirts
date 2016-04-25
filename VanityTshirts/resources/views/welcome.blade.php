@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Welcome to Vanity Tshirts<br> <small>We have tshirts to fit any need.</small></h1></div>

            </div><!--end panel-->
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
            </div><!--end carousel-->
        </div>
    </div>
            
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('img/geek/pocket_protector.png')}}" alt="Geek Gangster Tshirt">
                        <div class="caption">
                            <h3>For the Nerd trapped inside all of us!</h3>
                            <p>...</p>
                            <p><a href="" class="btn btn-success" role="button">Get Geeky</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('img/bacon/Press_button_bacon.png')}}" alt="Press Button for Bacon Tshirt">
                        <div class="caption">
                            <h3>View our all NEW Bacon Tshirt line!</h3>
                            <p>...</p>
                            <p><a href="" class="btn btn-success" role="button">View more Bacon</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('img/quotes/Inigo.png')}}" alt="My name is Inigo Tshirt">
                        <div class="caption">
                            <h3>Custom Quotes, made to order.</h3>
                            <p>...</p>
                            <p><a href="" class="btn btn-success" role="button">View more Quotes</a></p>
                        </div>
                    </div>
                </div>
            </div>  
              
        </div>
    </div>
</div>
@endsection