<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function landingPage(){
        return redirect('login');  //redirect to login page
    }
}
