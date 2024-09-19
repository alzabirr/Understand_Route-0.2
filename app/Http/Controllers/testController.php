<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{

    function sun(){
        return 2;
    }

    function fun(){
        return "mathhhh";
    }


    function funny(){
        return response("hello this is funny function");
    }


    function under (){
        return response("hi ji ");
    }



}
