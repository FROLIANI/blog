<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontendController extends Controller
{
    public function getHomePage(){

        $users= user:: all();
        return $users;

        return view('pages.home');
    }
}
 

