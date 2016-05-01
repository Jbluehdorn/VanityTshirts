<?php

namespace App\Http\Controllers;

use App\Employee;
//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function all() {
        $employees = Employee::orderBy('lastName', 'firstName')->get(['firstName', 'lastName', 'id']);

        return view('admin.employees.showAll', compact('employees'));
    }

    public function show(Employee $emp){
        return view('admin.employees.show', compact('emp'));
    }

    public function newForm() {
        return view('admin.employees.new');
    }

    public function newEmployee(Request $request) {
        $imgDirectory = 'images';
        $defaultImg = $imgDirectory . '/default.png';

        $emp = new Employee($request::all());

        if($request::hasFile('picture')) {
            $file = $request::file('picture');
            $file->move(public_path() . '/' . $imgDirectory, $file->getClientOriginalName());
            $emp->picture = $imgDirectory . '/' . $file->getClientOriginalName();
        } else {
            $emp->picture = $defaultImg;
        }

        $emp->save();

        return redirect('/admin/employees');
    }
}
