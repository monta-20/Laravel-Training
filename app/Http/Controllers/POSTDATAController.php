<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSTDATAController extends Controller
{
    public function sendData(Request $req){
        return $req->input();
    }
}
