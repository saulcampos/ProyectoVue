<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutsViewsWebPage extends Controller
{
  public function index()
	{return view('PageWeb/Home/index');}
}
