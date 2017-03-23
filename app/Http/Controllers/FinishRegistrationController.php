<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FinishRegistrationController extends Controller
{
    public function finishRegistrationForm (Request $request){
  	return view ('registration-complete');
	}
}