<?php

namespace App\Http\Controllers;

use App\Models\CategoryService;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Http\Requests;

class ServiceController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return View::make('administration.service.index')
                                ->with('services',$services)
                                ->with('success',false)
                                ->with('save',false);
    }

    public function create(){
        $categories = CategoryService::all();

        return View::make('administration.service.create')
                    ->with('categories',$categories);
    }

    public function store(Request $request){
        $input = $request->all();

        if(isset($input['status'])){
            $input['status'] = true;
        }else{
            $input['status'] = false;
        }

        $input['creation_date'] = Carbon::now()->format('Y-m-d');
        Service::create($input);

        $services = Service::all();

        return view('administration.service.index')
            ->with('services',$services)
            ->with('save' , 'store')
            ->with('success',true);
    }

    public function edit(Service $service){

        $categories = CategoryService::all();

        return View::make('administration.service.edit')
                        ->with('categories',$categories)
                        ->with('service',$service);
    }

    public function update(Service $service, Request $request){
            $service->name = $request['name'];
            $service->description = $request['description'];
            $service->category_id = $request['category_id'];
            $service->price = $request['price'];
            $service->cycle = $request['cycle'];

            if(isset($request['status'])){
                $request['status'] = true;
            }else{
                $request['status'] = false;
            }

            $service->status = $request['status'];
            $service->save();

        $services = Service::all();

        return view('administration.service.index')
            ->with('services',$services)
            ->with('save' , 'update')
            ->with('success',true);
    }

    public function destroy(Service $service){
        $service->delete();
    }

    public function suspend(Service $service){

        if($service->status == true){
            $service->status = false;
            $service->save();

            return response()->json(['message'=>false]);
        }else{
            $service->status = true;
            $service->save();
            return response()->json(['message'=>true]);
        }
    }
}
