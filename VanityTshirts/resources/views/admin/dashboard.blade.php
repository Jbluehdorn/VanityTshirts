@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome, {{$user->name}}</h1>
        <ul class="list-group">
            <li class="list-group-item"><a href="/admin/employees">Manage Employees</a></li>
            <li class="list-group-item"><a href="/admin/products">Manage Products</a></li>
        </ul>
    </div>
@stop