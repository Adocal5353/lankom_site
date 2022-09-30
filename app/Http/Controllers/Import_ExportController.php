<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Social_network;
use Illuminate\Http\Request;

class Import_ExportController extends Controller
{
    //
    public function index(){
        $block = Page::find(5)->block;
        $social_networks=Social_network::all();
        return view('import_export.index',[
            "block"=>$block,
            "social_networks"=>$social_networks
        ]);
    }
}
