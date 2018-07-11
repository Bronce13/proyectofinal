<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Articulo;

class TestController extends Controller
{
    public function view($id)
    {
    	$articulo = Articlo::find($id);

    	$articulo->categoria;
    	$articulo->user;
    	$articulo->tags;

    	return view('page.articulo', ['articulo' => $articulo]);

    }
}
