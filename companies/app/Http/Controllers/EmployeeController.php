<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {

        $employees = Employee::all();
        $comps = Company::all();
        return view('employees.index', compact('employees','comps'));
    }

    public function addEmp()
    {
        $companies = Company::all();
        return view('employees.add', compact('companies'));
    }

    public function insert(Request $request)
    {

        $request->validate([

            'vorname' => 'required',
            'nachname' => 'required',
            'email' => 'required|email'
        ]);

        $employee = new Employee();
        $employee->vorname = $request->input('vorname');
        $employee->nachname = $request->input('nachname');
        $employee->email = $request->input('email');
        $employee->comp_id = $request->input('company');

        $employee->save();

        session()->flash('message','One Employee has been created successfuly');

        return redirect('employees');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        session()->flash('message','One Employee has been created successfuly');

        return redirect('employees');
    }
}
