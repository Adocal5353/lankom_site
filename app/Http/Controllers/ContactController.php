<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Agences;
use App\Models\Site;
use App\Models\Social_network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function index(){
        $site = Site::all()->firstOrFail();

        $agences = Agences::all();
        $social_networks = Social_network::all();
        return view('contact',[
            'site'=>$site,
            'agences'=> $agences,
            'social_networks'=>$social_networks
        ]);
    }

    public function mailTo(Request $request){
        $receiver = Social_network::where('name','=','email')->first()->link;
        Mail::to($receiver)
            ->send(new Contact($request->except('_token')));

        $site = Site::all()->firstOrFail();

        $agences = Agences::all();
        $social_networks = Social_network::all();

        // return view('contact',[
        //     'site'=>$site,
        //     'agences'=> $agences,
        //     'social_networks'=>$social_networks
        // ])->with('success','Merci de nous avoir contacté. Nous ne tarderons pas à vous répondre');

        return redirect()->route('contact')->with('success','Merci de nous avoir contacté');
    }
}
