<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {

        $companies = Company::all();
        $emps = Employee::all();
        return view('companies.index', compact('companies','emps'));
    }

    public function addCompany()
    {

        return view('companies.add');
    }


    public function insert(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'address' => 'required'
        ]);


        $company = new Company();
        $company->name = $request->input('name');
        $company->address = $request->input('address');

        $company->save();

        session()->flash('message','Company has been created successfuly');

        return redirect('companies');
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        session()->flash('message','Company has been deleted successfuly');

        return redirect('companies');
    }
}
