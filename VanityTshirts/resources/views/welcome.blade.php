@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Welcome to Vanity T-shirts <small>We have t-shirts to fit any need.</small></h1></div>

            </div><!--end panel-->
            <div id="carousel" class="carousel slide center-block" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" src="{{asset('img/slide1.jpg')}}" alt="Vanity T-shirts Store">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{asset('img/slide2.jpg')}}" alt="Display Wall">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{asset('img/slide3.jpg')}}" alt="Custom Designs">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{asset('img/slide4.jpg')}}" alt="T-shirt colors">
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
                @foreach($products as $product)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
<!--                            <img src="{{asset('imgages/geek/pocket_protector.png')}}" alt="Geek Pocket Protector T-shirt">-->
                            <img src="{{URL::to('/')}}/{{$product->picture}}" alt="{{$product->name}}">
                            <div class="caption">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->description}}</p>
                                <p><a href="" class="btn btn-success" role="button">Get Geeky</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach                
            </div>                
        </div>
    </div>
</div>
@endsection