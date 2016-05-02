@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Shopping Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></h1>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Quantity</th>
                            <th colspan="2">Description</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>Peace Love and Bacon </td>
                            <td><img class="cart-img" src="{{asset('images/bacon/Peace_Love_Bacon.png')}}" alt="Peace Love and Bacon T-shirt"></td>
                            <td>Adult Sm</td>
                            <td>Blue</td>
                            <td>10.00</td>
                            <td>20.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6"><span class="pull-right">Total</span></td>
                            <td>20.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            
        </div>
    </div>
</div>
@endsection
