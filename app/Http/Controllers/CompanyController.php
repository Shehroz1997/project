<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $companies =  Company::get();
        // $companies = Company::paginate(10);
        return view('admin.companies.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        // dd($request->all());
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $name = strtotime(now()) . $logo->getClientOriginalName();
            $logo->move(public_path() . '/assets/admin/company/', $name);
            $file_url = '/assets/admin/company/' . $name;
        } else {
            $file_url =   null;
        }
        Company::create([
            'name' => $request->name, 'email' => $request->email, 'website' => $request->website, 'logo' => $file_url

        ]);
        return redirect()->route('companies.index')->with('message', 'Company Created Successfully')->with('message_type', 'info');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCompanyRequest $request, Company $company)
    {
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $name = strtotime(now()) . $logo->getClientOriginalName();
            $logo->move(public_path() . '/assets/admin/company/', $name);
            $file_url = '/assets/admin/company/' . $name;
            if (file_exists(public_path() . '/' . $company->logo)) {
                if ($company->logo) {
                    unlink(public_path() . '/' . $company->logo);
                }
            }
        } else {
            $file_url = $company->logo;
        }
        // dd($request->all());
        $company->update([
            'name' => $request->name, 'email' => $request->email, 'website' => $request->website, 'logo' => $file_url

        ]);
        return redirect()->route('companies.index')->with('message', 'Company Updated Successfully')->with('message_type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        // Check if the company has a logo file
        if ($company->logo) {

            $filePath = public_path('/' . $company->logo);


            if (file_exists($filePath)) {
                // dd('ok');

                unlink($filePath);
            }
        }
        // dd('moyemoye');

        $company->delete();

        return redirect()->back()->with('message', 'Company Deleted Successfully')->with('message_type', 'error');
    }
}
