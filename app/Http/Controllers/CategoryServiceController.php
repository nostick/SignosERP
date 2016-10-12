<?php

namespace App\Http\Controllers;

use App\Models\CategoryService;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
        $input = $request->all();

        CategoryService::create($input);

        $services = Service::all();

        return view('administration.service.index')
                        ->with('services',$services)
                        ->with('success',true)
                        ->with('save','storeCat');
    }

    public function edit(){

    }

    public function update(){

    }

    public function show(){

    }

    public function delete(){

    }
}
