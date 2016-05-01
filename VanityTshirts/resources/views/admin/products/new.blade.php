@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>New Product</h3></div>
            <div class="panel-body">
                <form action="/admin/products/new" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <label for="" class="control-label">Name:</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="" class="control-label">Cost:</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                <input type="text" class="form-control" name="cost" />
                            </div>
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="" class="control-label">Discount: (optional)</label>
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
                                <input type="text" class="form-control" name="discount" value="0.0" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr />
                        <div class="form-group col-xs-12">
                            <label for="" class="control-label">Picture:</label>
                            <input type="file" name="picture" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <label for="" class="control-label">Description:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    {{csrf_field()}}
                    <div class="row">
                        <hr />
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop