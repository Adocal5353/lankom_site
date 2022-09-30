<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Social_network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    //

    public function index(){
        $services = Service::all();
        $social_networks=Social_network::all();
        // dd($services);
        return view('services',[
            'services'=> $services,
            "social_networks"=>$social_networks
        ]);
    }
}
