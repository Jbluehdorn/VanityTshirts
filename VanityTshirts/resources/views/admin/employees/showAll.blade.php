@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employees</h1>
        <ul class="list-group">
        @foreach($employees as $employee)
                <li class="list-group-item"><a href="/admin/employees/{{$employee->id}}">{{$employee->lastName}}, {{$employee->firstName}}</a></li>
        @endforeach
        </ul>

        <a href="/admin/employees/new"><button class="btn btn-default" type="button">New Employee</button></a>
    </div>
@stop