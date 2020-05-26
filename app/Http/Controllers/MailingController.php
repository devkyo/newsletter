<?php

namespace App\Http\Controllers;

use App\Mailing;
use Illuminate\Http\Request;



class MailingController extends Controller
{
    public function index(Request $request){   
        // if($request->ajax()){
        //     return Mailing::where('user_id', auth()->id())->get();
        // }else{
        //     return view('mailing');
        // }

        return Mailing::all();
    }   

    
}
