<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Validator;
use Response;

class ClientController extends Controller
{
    //get all clients
    public function index(){
        $clients = Client::all();
        return $clients;
    }

    //client store
    public function store(Request $request){
        $validators = Validator::make($request->all(),[
            'name'  => 'required',
            'email'  => 'required',
            'phone'  => 'required',
            'address'  => 'required',
        ]);
        if($validators->fails()){ 
            return Response::json(['errors'=>$validators->getMessageBag()->toArray()]);
        }else{
            $client             = new Client();
            $client->name       = $request->name;
            $client->email      = $request->email;
            $client->phone      = $request->phone;
            $client->address    = $request->address;
            if($client->save()){
                return response([
                    'status' => 'success',
                    'data'   => $client
                ],201);
            }else{
                return response([
                    'status' => 'error',
                    'data'    => []
                ], 403);
            }
        }
    }

    //client update
    public function update(Request $request, Client $client){
        $validators = Validator::make($request->all(),[
            'name'  => 'required',
            'email'  => 'required',
            'phone'  => 'required',
            'address'  => 'required',
        ]);
        if($validators->fails()){ 
            return Response::json(['errors'=>$validators->getMessageBag()->toArray()]);
        }else{
            $client->name       = $request->name;
            $client->email      = $request->email;
            $client->phone      = $request->phone;
            $client->address    = $request->address;
            if($client->update()){
                return response([
                    'status' => 'success',
                    'data'   => $client
                ],201);
            }else{
                return response([
                    'status' => 'error',
                    'data'    => []
                ], 403);
            }
        }
    }

}
