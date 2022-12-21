<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //function to access data
    public function getSessionData(Request $request)
    {
if($request->session()->has('name'))
{
    echo $request->session()->get('name');
}
else
{
    echo 'No data in the session';
}
    }

    //Function to Retrieve data
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name','Frolian');
        echo 'Data has been added to the session';
    }

    //Function to Delete Data
    public function deeleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "Data has been removed from the session";
    }
}
