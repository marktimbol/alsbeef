<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MenusController extends Controller
{
    public function index()
    {
    	$pageTitle = 'Menus';
    	return view('public.menus.index', compact('pageTitle'));
    }

    public function show($menu)
    {
    	$pageTitle = 'Menu';
    	return view('public.menus.show', compact('pageTitle'));
    }
}
