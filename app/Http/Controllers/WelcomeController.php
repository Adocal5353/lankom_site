<?php

namespace App\Http\Controllers;

use App\Models\Social_network;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function index(){
        $social_networks = Social_network::all();
        return view('welcome',[
            "social_networks"=>$social_networks
        ]);
    }
}
