<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function reconocimiento()
    {
        return view('site.layout.reconocimiento');
    }

    public function beneficio()
    {
    	return view('site.layout.beneficio');
    }

    public function medicion()
    {
    	return view('site.layout.medicion');
    }

    public function about()
    {
        return view('site.layout.nosotros');
    }

    public function gratis() {
        return view('site.layout.free');
    }
    
    public function contacto() {
        return view('site.layout.contacto');
    }
}
