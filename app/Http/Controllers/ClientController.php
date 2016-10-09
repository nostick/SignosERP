<?php

namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\Responsibles;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
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

        $clients = Client::all();

        return View::make('administration.client.index')
            ->with('save','store')
            ->with('success',false)
            ->with('clients',$clients);
    }

    public function create(){
        return View::make('administration.client.create');
    }

    public function store(Request $request){

        if($request['radio'] == 1){
            $client = new Client;

            $responsible = new Responsibles;

            $responsible->social_rason = $request['social_razon'];
            $responsible->cuit         = $request['cuit'];
            $responsible->address      = $request['fiscalAddress'];
            $responsible->save();

            $client->name           = $request['name'];
            $client->last_name      = $request['last_name'];
            $client->company        = $request['company'];
            $client->responsible    = true;
            $client->responsible_id = $responsible->id;
            $client->home_phone     = $request['home_phone'];
            $client->mobile_phone   = $request['mobile_phone'];
            $client->email          = $request['email'];
            $client->address        = $request['address'];
            $client->type           = $request['radio'];
            $client->status         = true;
            $client->save();
        }else{
            $client = new Client;

            $client->name           = $request['name'];
            $client->last_name      = $request['last_name'];
            $client->company        = $request['company'];
            $client->responsible    = false;
            $client->responsible_id = null;
            $client->home_phone     = $request['home_phone'];
            $client->mobile_phone   = $request['mobile_phone'];
            $client->email          = $request['email'];
            $client->address        = $request['address'];
            $client->type           = $request['radio'];
            $client->status         = true;
            $client->save();
        }

        $clients = Client::all();

        return view('administration.client.index')
                              ->with('save','store')
                              ->with('success',true)
                              ->with('clients',$clients);

    }

    public function edit(Client $client){
        return View::make('administration.client.edit')->with('client',$client);
    }

    public function update(Client $client, Request $request){

        if($client->type == 1 && $request['radio'] == 1){

            $responsible = Responsibles::find($client->responsible_id)->first();
            $responsible->social_rason = $request['social_razon'];
            $responsible->cuit         = $request['cuit'];
            $responsible->address      = $request['fiscalAddress'];
            $responsible->save();

            $client->name           = $request['name'];
            $client->last_name      = $request['last_name'];
            $client->company        = $request['company'];
            $client->responsible    = true;
            $client->responsible_id = $responsible->id;
            $client->home_phone     = $request['home_phone'];
            $client->mobile_phone   = $request['mobile_phone'];
            $client->email          = $request['email'];
            $client->address        = $request['address'];
            $client->type           = $request['radio'];
            $client->status         = true;
            $client->save();
        }
        elseif($client->type != 1 && $request['radio'] == 1)
        {

            $responsible = new Responsibles;

            $responsible->social_rason = $request['social_razon'];
            $responsible->cuit         = $request['cuit'];
            $responsible->address      = $request['fiscalAddress'];
            $responsible->save();

            $client->name           = $request['name'];
            $client->last_name      = $request['last_name'];
            $client->company        = $request['company'];
            $client->responsible    = true;
            $client->responsible_id = $responsible->id;
            $client->home_phone     = $request['home_phone'];
            $client->mobile_phone   = $request['mobile_phone'];
            $client->email          = $request['email'];
            $client->address        = $request['address'];
            $client->type           = $request['radio'];
            $client->status         = true;
            $client->save();
        }else{

            $client->name           = $request['name'];
            $client->last_name      = $request['last_name'];
            $client->company        = $request['company'];
            $client->responsible    = false;
            $client->responsible_id = null;
            $client->home_phone     = $request['home_phone'];
            $client->mobile_phone   = $request['mobile_phone'];
            $client->email          = $request['email'];
            $client->address        = $request['address'];
            $client->type           = $request['radio'];
            $client->status         = true;
            $client->save();
        }

        $clients = Client::all();

        return view('administration.client.index')
            ->with('save','update')
            ->with('success',true)
            ->with('clients',$clients);
    }

    public function destroy(Client $client){
        if($client->type == 1){
            $responsible = Responsibles::find($client->responsible_id)->first();
            $responsible->delete();
            $client->delete();
        }else{
            $client->delete();
        }
    }

    public function suspend(Client $client){

        if($client->status == true){
        $client->status = false;
        $client->save();
        }else{
            $client->status = true;
            $client->save();
        }
    }
}
