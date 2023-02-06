<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginAuth extends Controller
{
    //

    public function userlogin(Request $req){


        return $req->input();
        
         
    }
}
