<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Block;
use App\Models\Social_network;
use Illuminate\Support\Facades\Request;

class EducationController extends Controller
{
    //
    public function Index()
    {
        $block = Page::find(2)->block;
        $social_networks = Social_network::all();
        return view('education.index',[
            "block"=>$block,
            "social_networks"=>$social_networks
        ]);
    }
}
