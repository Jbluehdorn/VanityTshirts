@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>New Employee</h3></div>
            <div class="panel-body">
                <form action="/admin/employees/new" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label for="" class="control-label">First Name:</label>
                            <input type="text" class="form-control" name="firstName" />
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="" class="control-label">Last Name:</label>
                            <input type="text" class="form-control" name="lastName" />
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="" class="control-label">Email:</label>
                            <input type="text" class="form-control" name="email" />
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
                        <hr>
                        <div class="form-group col-xs-6">
                            <label for="" class="control-label">Position:</label>
                            <input type="text" class="form-control" name="position" />
                        </div>
                        <div class="formg-group col-xs-6">
                            <label for="" class="control-label">Personal Motto:</label>
                            <input type="text" class="form-control" name="motto" />
                        </div>
                        <div class="form-group col-xs-12">
                            <label for="" class="control-label">Bio:</label>
                            <textarea class="form-control" name="bio"></textarea>
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