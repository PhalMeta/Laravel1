<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassingValue extends Controller
{
    public function index()
    {
    	//  $name="seyha";
    	// return view('Data')->with('name',$name);

    	$fname="Sok";
    	$lname="Dara";
    	return view('Data',compact('fname','lname'));
    }
}
?>