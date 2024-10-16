<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassDataController extends Controller
{
    function PassData(){
        $name = "Montassar";
        $lastname = "Ben Brahim";

        $data = array(
            "name" =>"Montassar",
            "lastname"=>"Ben Brahim",
            "Age"=>23
        );

        return view("Data",compact('name','lastname','data'));
         // Pass variables using with()
         //return view('Data')->with('name', $name)->with('lastname', $lastname); //another soltion but with pass single data
    }
}
