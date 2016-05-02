<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	$pageTitle = 'Home';
    	return view('public.home', compact('pageTitle'));
    }

    public function menu()
    {
    	$pageTitle = 'Menu';
    	return view('public.menu', compact('pageTitle'));
    }
}
