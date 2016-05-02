@extends('layouts.app')

@section('content')
    <style>
        .employee-img {
            max-height: 150px;
        }
    </style>
    <div class="container">
        <h1>{{$product->name}} - ${{ $product->cost}}</h1>
        <div class="col-xs-2">
            <img src="{{URL::to('/')}}/{{$product->picture}}"
                 alt="Photo of {{$product->name}}"
                 class="img-thumbnail img-responsive employee-img" />
        </div>
        <div class="col-xs-10">
            @if(strcmp($product->discount, '0.0') != 0)
                <strong>Discount:</strong> {{$product->discount}}%
                <br/>
            @endif
            <strong>Description:</strong>
            <br />
            <p>{{$product->description}}</p>
        </div>
    </div>
@stop