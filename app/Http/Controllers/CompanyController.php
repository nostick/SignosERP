<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $company = Company::find(1);

        return View::make('administration.company.index')
            ->with('company',$company)
            ->with('success',false)
            ->with('save',false);
    }

    public function create(){
        return View::make('administration.company.create');
    }

    public function store(Request $request){
        $input = $request->all();

        Company::create($input);

        $company = Company::find(1);

        return View::make('administration.company.index')
            ->with('companies',$company)
            ->with('save' , 'store')
            ->with('success',true);
    }

    public function edit(Company $company){

        return View::make('administration.company.edit')
                    ->with('company',$company);
    }

    public function update(Company $company, Request $request){

        $company->nick_name      = $request->nick_name;
        $company->name           = $request->name;
        $company->address        = $request->address;
        $company->location       = $request->location;
        $company->postal_code    = $request->postal_code;
        $company->phone          = $request->phone;
        $company->email          = $request->email;
        $company->cuit           = $request->cuit;
        $company->iibb           = $request->iibb;
        $company->bank_data      = $request->bank_data;
        $company->save();

        $companies = Company::all();

        return View::make('administration.company.index')
            ->with('company',$company)
            ->with('save' , 'update')
            ->with('success',true);
    }

    public function destroy(Company $company){
            Company::destroy($company->id);
    }
}
