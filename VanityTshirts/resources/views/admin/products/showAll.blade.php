@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <ul class="list-group">
            @foreach($products as $product)
                <li class="list-group-item"><a href="/admin/products/{{$product->id}}">{{$product->name}}</a></li>
            @endforeach
        </ul>

        <a href="/admin/products/new"><button class="btn btn-default" type="button">New Product</button</a>
    </div>
@stop