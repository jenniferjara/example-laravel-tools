<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @param Request $request
     */
    public function registro(Request $request) {
    	try {
    		return 'success';
    	} catch(\Exception $e) {
    		return 'error';
    	}
       
    }

    public function success() {
    	return view('site.partials.messages.success');
    }
    public function error() {
    	return view('site.partials.messages.error');
    }
}
