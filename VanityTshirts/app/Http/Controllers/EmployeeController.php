<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

use App\Http\Requests;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function all() {
        $employees = Employee::orderBy('lastName', 'firstName')->get(['firstName', 'lastName', 'id']);

        return view('employees.showAll', compact('employees'));
    }

    public function show(Employee $emp){
        return view('employees.show', compact('emp'));
    }

    public function newForm() {
        return view('employees.new');
    }

    public function newEmployee(Request $request) {
        $emp = new Employee($request->all());

        $emp->save();
    }
}
