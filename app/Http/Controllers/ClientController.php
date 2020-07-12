<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //get all clients
    public function index(){
        $clients = Client::all();
        return $clients;
    }



}
