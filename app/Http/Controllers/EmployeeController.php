<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Company;
use App\Http\Requests\StoreEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employe::get();
        // dd($employees->all());
        return view('admin.employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::get();
        return view('admin.employees.create')->with('companies', $companies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        // dd($request->all());
        Employe::create([
            'first_name' => $request->first_name, 'last_name' => $request->last_name, 'email' => $request->email,
            'phone' => $request->phone, 'company_id' => $request->company_id
        ]);
        return redirect()->route('employees.index')->with('message', 'Employe Created Successfully')->with('message_type', 'info');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        // return view('admin.employees.show')->with('employe', $employe);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employee)
    {
        $companies = Company::get();
        // $employe = Employe::find($employe);
        // $employe = Employe::findOrFail($id);
        // dd($employe->get());
        return view('admin.employees.edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmployeeRequest $request, Employe $employee)
    {
        // dd($request->all());
        $employee->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_id' => $request->company_id
        ]);

        // Redirect after updating
        return redirect()->route('employees.index')->with('message', 'Employee Updated Successfully')->with('message_type', 'info');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employee)
    {
        $employee->delete();
        return redirect()->back()->with('message', 'Employe Deleted Successfully')->with('message_type', 'error');
    }
}
