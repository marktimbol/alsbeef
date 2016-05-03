<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StoresController extends Controller
{
    public function index()
    {
    	$pageTitle = 'Our Stores';
    	return view('public.stores.index', compact('pageTitle'));
    }
}
