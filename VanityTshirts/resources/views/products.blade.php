@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Products</h1></div>

                <div class="panel-body">
                    Choose a product below to add to your shopping cart.
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/geek/pocket_protector.png')}}" alt="Geek Pocket Protector T-shirt">
                        <div class="caption">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="color">Pick color</label>
                                    <select class="form-control">
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                        <option value="red">Red</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color">Qty</label>
                                    <select class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/geek/band_geek.png')}}" alt="Band Geek T-shirt">
                        <div class="caption">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="color">Pick color</label>
                                    <select class="form-control">
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                        <option value="red">Red</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color">Qty</label>
                                    <select class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/geek/bears_beets_battlestar.png')}}" alt="Dwight T-shirt">
                        <div class="caption">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="color">Pick color</label>
                                    <select class="form-control">
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                        <option value="red">Red</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color">Qty</label>
                                    <select class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/geek/geek_gangster.png')}}" alt="Geek Gangster T-shirt">
                        <div class="caption">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="color">Pick color</label>
                                    <select class="form-control">
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                        <option value="red">Red</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color">Qty</label>
                                    <select class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
