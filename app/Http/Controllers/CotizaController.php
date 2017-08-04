<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotizaController extends Controller
{
    public function cotiza ( Request $request ){
    	try {
    		return 'success';
    	} catch (\Exception $e) {
    		return 'error';
    	}
    }

    public function success() {
    	return view('site.partials.messages.successcheckout');
    }
    public function error() {
    	return view('site.partials.messages.errorcheckout');
    }
}
