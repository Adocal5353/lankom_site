<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Social_network;
use Illuminate\Http\Request;

class ImmobilierController extends Controller
{
    //

    public function index(){
        $block = Page::find(6)->block;
        $social_networks = Social_network::all();
        return view('immobilier.index',[
            "block"=>$block,
            "social_networks"=>$social_networks
        ]);
    }
}
