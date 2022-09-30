<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Social_network;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    //
    public function index(){

        $block = Page::find(1)->block;
        $social_networks=Social_network::all();
        return view('voyage.index',[
            "block"=>$block,
            "social_networks"=>$social_networks
        ]);
    }
}
